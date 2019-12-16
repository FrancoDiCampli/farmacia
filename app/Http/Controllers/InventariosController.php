<?php

namespace App\Http\Controllers;

use App\Farmacia;
use App\Inventario;
use App\Movimiento;
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
            $inventario = Inventario::create($request->toArray());
            Movimiento::create([
                'tipo_movimiento' => 1,
                'cantidad' => $request->get('stock'),
                'fecha_movimiento' => now(),
                'inventario_id' => $inventario->id,
                'usuario_id' => 1 // auth()->user()->id
            ]);
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
        $inventario = Inventario::find($id);
        return view('inventarios.show', compact('inventario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventario = Inventario::find($id);
        return view('inventarios.edit', compact('inventario'));
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
        // return $request;
        $inventario = Inventario::find($id);

        switch ($request->get('tipo_movimiento')) {
            case '2':
                $inventario->stock +=  $request->get('cantidad');
                $inventario->save();
                break;

            case '3':
                $inventario->stock -=  $request->get('cantidad');
                $inventario->save();
                break;

            case '4':
                $inventario->stock =  $request->get('cantidad');
                $inventario->save();
                break;

            case '5':
                $inventario->stock -=  $request->get('cantidad');
                $inventario->save();
                break;

            case '6':
                $inventario->stock +=  $request->get('cantidad');
                $inventario->save();
                break;
        }

        Movimiento::create([
            'tipo_movimiento' => $request->get('tipo_movimiento'),
            'cantidad' => $request->get('cantidad'),
            'fecha_movimiento' => now(),
            'inventario_id' => $inventario->id,
            'usuario_id' => 1 // auth()->user()->id
        ]);

        return redirect()->action('InventariosController@index')->with('success', ['Inventario Actualizado']);
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
