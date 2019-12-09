<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = 'noimage.jpg';
        if ($request->hasFile('envase_secundario')) {
            $name = now()->format('YmdHis') . '.' . $request->file('envase_secundario')->getClientOriginalExtension();
            Image::make($request->file('envase_secundario'))->save(public_path('img/productos/') . $name);
        }
        $foto = '/img/productos/' . $name;
        $data = $request->toArray();
        $data['envase_secundario'] = $foto;

        Producto::create($data);

        return redirect()->action('ProductosController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('productos.edit', compact('producto'));
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
        $producto = Producto::find($id);
        $name = 'noimage.jpg';
        if ($request->hasFile('envase_secundario')) {
            unlink(public_path($producto->envase_secundario));
            $name = now()->format('YmdHis') . '.' . $request->file('envase_secundario')->getClientOriginalExtension();
            Image::make($request->file('envase_secundario'))->save(public_path('img/productos/') . $name);
        }
        $foto = '/img/productos/' . $name;
        $data = $request->toArray();
        $data['envase_secundario'] = $foto;

        $producto->update($data);
        return redirect()->action('ProductosController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        unlink(public_path($producto->envase_secundario));
        $producto->delete();
        return redirect()->action('ProductosController@index');
    }
}
