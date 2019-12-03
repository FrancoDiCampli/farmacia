<?php

namespace App\Http\Controllers;

use App\Inventario;
use App\Producto;
use Illuminate\Http\Request;

class InventariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->get('buscar')) {
            $producto = Producto::where('nombre_comercial', $request->get('buscar'))->get();
            if (count($producto) > 0) {
                $producto = $producto[0];
                $inventarios = $producto->inventarios;
                return view('inventarios.index', compact('inventarios', 'producto'));
            } else {
                $inventarios = [];
                $producto = [];
                return view('inventarios.index', compact('inventarios', 'producto'));
            }
        } else {
            $inventarios = [];
            $producto = [];
            return view('inventarios.index', compact('inventarios', 'producto'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
