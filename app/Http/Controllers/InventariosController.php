<?php

namespace App\Http\Controllers;

use App\Farmacia;
use App\Inventario;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class InventariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar = $request->get('buscar');
        if ($request->get('buscar')) {
            $producto = Producto::where('nombre_comercial', 'LIKE', "$buscar%")
                ->orWhere('nombre_generico', 'LIKE', "$buscar%")
                ->get();
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
        // $producto = Producto::find($id);
        $farmacias = Farmacia::all();
        return view('inventarios.create', compact('farmacias'));
    }

    public function crear($id)
    {
        $producto = Producto::find($id);
        $farmacias = Farmacia::all();
        return view('inventarios.create', compact('producto', 'farmacias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventarios = Inventario::where('lote', $request->get('lote'))
            ->where('farmacia_id', $request->get('farmacia_id'))
            ->where('producto_id', $request->get('producto_id'))
            ->get()->first();
        if ($inventarios) {
            return 'Inventario Existente';
        } else {
            Inventario::create($request->toArray());
        }

        return redirect()->action('InventariosController@index')->with('success', ['Inventario Creado']);
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
