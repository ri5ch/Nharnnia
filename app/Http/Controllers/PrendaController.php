<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prenda;
use Illuminate\Support\Facades\Auth;

class PrendaController extends Controller
{

    public function inicio(){
        return view('inicio.index');
    }

    public function index()
    {
        $user = Auth::user();
        $prendas = Prenda::all();
        return view('prendas.index', compact('prendas','user'));
    }

    public function indexHombre()
    {
        $user = Auth::user();
        $prendas = Prenda::where('genero', 'hombre')->get();
        return view('prendas.index', compact('prendas', 'user'));
    }

    public function indexMujer()
    {
        $user = Auth::user();
        $prendas = Prenda::where('genero', 'mujer')->get();
        return view('prendas.index', compact('prendas', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'estilo' => 'required',
            'color1' => 'required',
            'color2' => 'required',
            'imagen' => 'required',
            'tipo' => 'required',
            'precio' => 'required',
            'genero' => 'required',
          ]);
          Prenda::create($request->all());
          return redirect()->route('prendas.index')
            ->with('success','Prenda created successfully.');
    }

    
    public function show($id)
    {
        $prenda = Prenda::find($id);
        return view('prendas.show', compact('prenda'));
    }

    public function create()
    {
        return view('prendas.create');
    }

    public function edit($id)
    {
        $prenda = Prenda::find($id);
        return view('prendas.edit', compact('prenda'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'estilo' => 'required',
            'color1' => 'required',
            'color2' => 'required',
            'imagen' => 'required',
            'tipo' => 'required',
            'precio' => 'required',
            'genero' => 'required',
        ]);
        $prenda = Prenda::find($id);
        $prenda->update($request->all());
        return redirect()->route('usuario.indexPrendas')
            ->with('success', 'Prenda updated successfully.');
    }

    public function prendasAdmin()
    {
        $user = Auth::user();
        $prendas = Prenda::all();
        return view('usuario.indexPrendas', compact('prendas','user'));
    }

    public function destroy($id)
    {
        $prenda = Prenda::find($id);
        $prenda->delete();
        return redirect()->route('prendas.index')
            ->with('success', 'Prenda deleted successfully.');
    }

}
