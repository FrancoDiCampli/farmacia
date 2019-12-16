<?php

namespace App\Http\Controllers;

use App\Farmacia;
use App\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        $farmacias = Farmacia::all();
        return view('usuarios.index', compact('usuarios', 'farmacias'));
    }

    public function create()
    {
        $farmacias = Farmacia::all();
        return view('usuarios.create', compact('farmacias'));
    }

    public function store(Request $request)
    {
        Usuario::create($request->toArray());
        return redirect()->action('UsuariosController@index');
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.show', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        // return $request;
        $usuario = Usuario::find($id);
        $usuario->update($request->toArray());
        return redirect()->action('UsuariosController@index');
    }

    public function edit($id)
    {
        $usuario = Usuario::find($id);
        $farmacias = Farmacia::all();
        return view('usuarios.edit', compact('usuario', 'farmacias'));
    }

    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->action('UsuariosController@index');
    }
}
