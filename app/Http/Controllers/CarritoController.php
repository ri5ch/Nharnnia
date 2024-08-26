<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\Prenda;
use App\Models\Armario;
use App\Models\Outfit;
use Illuminate\Support\Facades\Auth;




class CarritoController extends Controller
{
    public function agregarPrenda(Request $request, $idPrenda)
    {   
        $usuario = Auth::user();
        $usuarioId = Auth::id();
        $carrito = Carrito::firstOrCreate(['user_id' => $usuarioId]);
        $carrito->prendas()->attach($idPrenda);
        if (!$usuario->armario) {
            $armario = new Armario();
            $usuario->armario()->save($armario);
        }
        return redirect()->route('carrito.mostrar');
    }

    public function mostrarCarrito()
    {
        $usuario = Auth::user();
        $usuarioId = Auth::id();
        Carrito::firstOrCreate(['user_id' => $usuarioId]);
        $carrito = Carrito::where('user_id', $usuarioId)->with('prendas')->first();
        $prendas = $usuario->carrito->prendas;
        $total = $prendas->sum('precio');
        return view('carrito.mostrar', compact('carrito','total'));
    }

    public function eliminarPrenda($idPrenda)
    {
        $usuarioId = Auth::id();
        $carrito = Carrito::where('user_id', $usuarioId)->first();
        $carrito->prendas()->detach($idPrenda);
        return redirect()->route('carrito.mostrar');
    }

    public function comprar()
    {
        $usuario = Auth::user();

        $prendasEnCarrito = $usuario->carrito->prendas;

        $prendasEnArmario = $usuario->armario->prendas->pluck('id')->toArray();

        $prendasParaAgregar = $prendasEnCarrito->reject(function ($prenda) use ($prendasEnArmario) {
            return in_array($prenda->id, $prendasEnArmario);
        });

        if ($prendasParaAgregar->isNotEmpty()) {
            $usuario->armario->prendas()->attach($prendasParaAgregar->pluck('id'));
        }

        $usuario->carrito->prendas()->detach();

        return redirect()->route('carrito.mostrar');
    }


    public function mostrarArmario()
    {
        $user = Auth::user();

        if ($user->armario) {
            $prendas = $user->armario->prendas;
            
            return view('armario.mostrar', compact('prendas'));
        } else {
            $armario = new Armario();
            $user->armario()->save($armario);
            return view('armario.mostrar', compact('prendas'));
        }
    }

    public function eliminar(Prenda $prenda)
    {
        $usuario = Auth::user();
        $armario = $usuario->armario;

        if ($armario) {
            $armario->prendas()->detach($prenda);
            return redirect()->back()->with('success', 'La prenda ha sido eliminada del armario correctamente.');
        } else {
            return redirect()->back()->with('error', 'No se pudo encontrar el armario del usuario.');
        }
    }

    public function mostrarFormularioGenerarOutfit()
    {
        return view('armario.generar_outfit');
    }


    protected $outfits=[];


    public function __construct()
    {
        $this->outfits = Outfit::all();
    }



    public function filtrarPrendasPorColores($prendas)
{

    $combinacionesColores = [
        'rojo' => ['negro', 'blanco', 'azul', 'gris', 'beige'],
        'azul' => ['blanco', 'gris', 'negro', 'beige', 'amarillo', 'rojo'],
        'verde' => ['marron', 'negro', 'blanco', 'gris', 'beige'],
        'negro' => ['blanco', 'gris', 'rojo', 'azul', 'verde', 'marrón'],
        'blanco' => ['negro', 'azul', 'rojo', 'verde', 'marrón', 'gris'],
        'gris' => ['negro', 'blanco', 'rojo', 'azul', 'verde', 'amarillo'],
        'marrón' => ['beige', 'verde', 'blanco', 'gris'],
        'beige' => ['marrón', 'blanco', 'verde', 'azul', 'gris', 'rojo'],
        'amarillo' => ['azul', 'negro', 'gris', 'blanco'],
        'naranja' => ['azul', 'blanco', 'negro', 'gris'],
        'rosa' => ['gris', 'blanco', 'negro'],
        'morado' => ['gris', 'blanco', 'negro', 'rosa', 'azul']
        
    ];

    $prendasFiltradas = $prendas->filter(function ($prenda) use ($combinacionesColores) {
        foreach ($combinacionesColores as $color => $coloresQuePeguen) {
            if ((in_array($prenda->color1, $coloresQuePeguen) && $prenda->color2 == $color) ||
                (in_array($prenda->color2, $coloresQuePeguen) && $prenda->color1 == $color) ||
                (in_array($prenda->color1, $coloresQuePeguen) && in_array($prenda->color2, $coloresQuePeguen)) ||
                ($prenda->color1 == $color && in_array($prenda->color2, $coloresQuePeguen)) ||
                ($prenda->color2 == $color && in_array($prenda->color1, $coloresQuePeguen))) {
                return true;
            }
        }
        return false;
    });

    if (!$prendasFiltradas->isEmpty()) {
        return $prendasFiltradas;
    }

    session()->put('error', 'No se encontraron colores que pegan.');
        return redirect()->route('armario.generar_outfit');
    return collect();
}






public function generarOutfitCompleto(Request $request)
{
    $usuario = Auth::user();

    if (!$usuario->armario || $usuario->armario->prendas->isEmpty()) {
        session()->put('error', 'Tu armario está vacío. Agrega prendas para generar un outfit.');
        return redirect()->route('armario.generar_outfit');
    }

    $estilo = $request->input('estilo');
    $genero = $request->input('genero');
    $clima = $request->input('clima');
    $latitud = $request->input('latitud');
    $longitud = $request->input('longitud');

    if ($latitud && $longitud) {
        $apiKey = 'ce54bfbcb6e820334f470f5525570a71';
        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?lat=$latitud&lon=$longitud&appid=$apiKey";
    
        $response = file_get_contents($apiUrl);
        $data = json_decode($response, true);
    
        if ($data && isset($data['main']['temp'])) {
            $temperatura = $data['main']['temp'] - 273.15;
            
            $temperaturaCelsius = round($temperatura, 2);
            if ($temperaturaCelsius >= 27) {
                $clima = 'verano';
            } elseif ($temperaturaCelsius <= 12) {
                $clima = 'invierno';
            } else {
                $clima = 'normal';
            }
        } else {
            $errorMessage = "No se pudo obtener la información de la temperatura para esta ubicación.";
            return view('armario.mostrar_outfit')->with('error', $errorMessage);
        }
    }

    $prendas = $usuario->armario->prendas()
        ->where('estilo', $estilo)
        ->where('genero', $genero)
        ->get();

    $prendasFiltradas = $this->filtrarPrendasPorColores($prendas);

    // Condición para clima y cantidad de prendas
    if (
        ($clima == 'invierno' && ($estilo != 'deportivo') && 
            (count($prendas) < 5 || 
            !$prendas->contains('tipo', 'arriba_interior') || 
            !$prendas->contains('tipo', 'arriba_normal') || 
            !$prendas->contains('tipo', 'arriba_exterior') || 
            !$prendas->contains('tipo', 'pantalones') || 
            !$prendas->contains('tipo', 'calzado'))) ||

        ($clima == 'invierno' && $estilo == 'deportivo' && 
            (count($prendas) < 4 || 
            !$prendas->contains('tipo', 'arriba_interior') || 
            !$prendas->contains('tipo', 'arriba_exterior') || 
            !$prendas->contains('tipo', 'pantalones') || 
            !$prendas->contains('tipo', 'calzado'))) ||

        ($clima == 'normal' && (count($prendas) < 4 || 
            !$prendas->contains('tipo', 'arriba_interior') || 
            !$prendas->contains('tipo', 'arriba_normal') || 
            !$prendas->contains('tipo', 'pantalones') || 
            !$prendas->contains('tipo', 'calzado'))) ||

        ($clima == 'verano' && (count($prendas) < 3 || 
            !$prendas->contains('tipo', 'arriba_interior') || 
            !$prendas->contains('tipo', 'pantalones_verano') || 
            !$prendas->contains('tipo', 'calzado')))
    ) {
        session()->put('error', 'No hay suficientes prendas en tu armario para el clima seleccionado o faltan prendas necesarias. Por favor, agrega más prendas.');
        return redirect()->route('armario.generar_outfit');
    }

    $outfit = new Outfit();
    $outfit->user_id = $usuario->id;
    $outfit->save();

    switch ($clima) {
        case 'invierno':
            if ($estilo == 'deportivo') {
                $parte_arriba_interior = $prendasFiltradas->where('tipo', 'arriba_interior')->random();
                $parte_arriba_exterior = $prendasFiltradas->where('tipo', 'arriba_exterior')->random();
                $parte_abajo = $prendasFiltradas->where('tipo', 'pantalones')->random();
                $calzado = $prendasFiltradas->where('tipo', 'calzado')->random();

                $outfit->prendas()->attach($parte_arriba_interior->id, ['tipo' => 'arriba_interior']);
                $outfit->prendas()->attach($parte_arriba_exterior->id, ['tipo' => 'arriba_exterior']);
                $outfit->prendas()->attach($parte_abajo->id, ['tipo' => 'pantalones']);
                $outfit->prendas()->attach($calzado->id, ['tipo' => 'calzado']);
            } else {
                $parte_arriba_interior = $prendasFiltradas->where('tipo', 'arriba_interior')->random();
                $parte_arriba_normal = $prendasFiltradas->where('tipo', 'arriba_normal')->random();
                $parte_arriba_exterior = $prendasFiltradas->where('tipo', 'arriba_exterior')->random();
                $parte_abajo = $prendasFiltradas->where('tipo', 'pantalones')->random();
                $calzado = $prendasFiltradas->where('tipo', 'calzado')->random();

                $outfit->prendas()->attach($parte_arriba_interior->id, ['tipo' => 'arriba_interior']);
                $outfit->prendas()->attach($parte_arriba_normal->id, ['tipo' => 'arriba_normal']);
                $outfit->prendas()->attach($parte_arriba_exterior->id, ['tipo' => 'arriba_exterior']);
                $outfit->prendas()->attach($parte_abajo->id, ['tipo' => 'pantalones']);
                $outfit->prendas()->attach($calzado->id, ['tipo' => 'calzado']);
            }
            break;

        case 'normal':
            $parte_arriba_interior = $prendasFiltradas->where('tipo', 'arriba_interior')->random();
            $parte_arriba_normal = $prendasFiltradas->where('tipo', 'arriba_normal')->random();
            $parte_abajo = $prendasFiltradas->where('tipo', 'pantalones')->random();
            $calzado = $prendasFiltradas->where('tipo', 'calzado')->random();

            $outfit->prendas()->attach($parte_arriba_interior->id, ['tipo' => 'arriba_interior']);
            $outfit->prendas()->attach($parte_arriba_normal->id, ['tipo' => 'arriba_normal']);
            $outfit->prendas()->attach($parte_abajo->id, ['tipo' => 'pantalones']);
            $outfit->prendas()->attach($calzado->id, ['tipo' => 'calzado']);
            break;

        case 'verano':
            $parte_arriba_interior = $prendasFiltradas->where('tipo', 'arriba_interior')->random();
            $parte_abajo = $prendasFiltradas->where('tipo', 'pantalones_verano')->random();
            $calzado = $prendasFiltradas->where('tipo', 'calzado')->random();

            $outfit->prendas()->attach($parte_arriba_interior->id, ['tipo' => 'arriba_interior']);
            $outfit->prendas()->attach($parte_abajo->id, ['tipo' => 'pantalones_verano']);
            $outfit->prendas()->attach($calzado->id, ['tipo' => 'calzado']);
            break;
    }

    $prendasOutfit = $outfit->prendas;
    return view('armario.mostrar_outfit', compact('prendasOutfit'));
}




    public function mostrarOutfits(){
        return view('armario.mostrar_todos_outfits', ['outfits' => $this->outfits]);
    }

    public function destroy(Outfit $outfit)
    {
        $outfit->delete();
        return redirect()->back()->with('success', '¡El outfit ha sido eliminado correctamente!');
    }

    
    
}