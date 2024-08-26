<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index (){
        $user = Auth::user();
        $usuarios = User::all();
        return view('usuario.index', compact('usuarios'));
    }

    public function registro(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('prendas.index');
    }

    public function inicioSesion(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);



        if (Auth::attempt($request->only('email', 'password'))) {

            return redirect()->route('prendas.index');
        }


        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }


    public function cerrarSesion()
    {
        Auth::logout();
        return redirect('/formulario-inicio-sesion');
    }

    public function mostrarFormularioRegistro(){
        return view('sesion.formulario-registro');
    }

    public function mostrarFormularioInicioSesion(){
        return view('sesion.formulario-inicio-sesion');
    }


    public function eliminarUsuario(User $user)
    {
        
        if (Auth::check() && Auth::user()->id === $user->id) {

            return back()->withErrors([
                'error' => 'No puedes eliminar tu propia cuenta.',
            ]);
        }


        $user->delete();
        
        return redirect()->route('usuario.index');
    }

   
    public function mostrarFormularioModificar(User $user)
    {
        
        if (Auth::check()) {
            $usuarios = User::all();
            
            return view('usuario.modificar', compact('user', 'usuarios'));
        } else {
        
            return back()->withErrors([
                'error' => 'No tienes permiso para modificar este usuario.',
            ]);
        }
    }

    public function modificarUsuario(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('usuario.index');
    }

    public function panelAdministrador(){
        return view('usuario.admin');
    }

}
