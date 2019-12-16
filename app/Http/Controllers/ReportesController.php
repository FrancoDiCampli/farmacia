<?php

namespace App\Http\Controllers;

use App\Farmacia;
use App\Inventario;
use App\Movimiento;
use App\Usuario;
use Illuminate\Http\Request;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar = $request->get('buscar');
        $user = Usuario::find(1); // auth()->user()->id
        $usuarios = Usuario::all();
        $farmacias = Farmacia::all();
        if ($request->get('farmacia_id')) {
            $usuarios = Usuario::all();
            $inventarios = Inventario::where('farmacia_id', $request->get('farmacia_id'))->get();
            foreach ($inventarios as $inv) {
                $reportes[] = $inv->movimientos;
            }
            if (isset($reportes)) {
                $reportes = collect($reportes)->flatten();
            } else {
                $reportes = [];
            }
        } elseif ($request->get('usuario_id')) {
            if ($user->perfil <> 1) {
                $usuarios = Usuario::where('farmacia_id', $user->farmacia_id)->get()->except($user->id);
            }
            $reportes = Movimiento::where('usuario_id', $request->get('usuario_id'))->get();
        } else {
            if ($user->perfil == 2) {
                $usuarios = Usuario::where('farmacia_id', $user->farmacia_id)->get()->except($user->id);
                if ($request->get('usuario_id')) {
                    $reportes = Movimiento::where('usuario_id', $request->get('usuario_id'))->get();
                } else {
                    $inventarios = $user->farmacia->inventarios;
                    foreach ($inventarios as $inv) {
                        $reportes[] = $inv->movimientos;
                    }
                    if (isset($reportes)) {
                        $reportes = collect($reportes)->flatten();
                    } else {
                        $reportes = [];
                    }
                }
            } elseif ($user->perfil == 3) {
                $reportes = $user->movimientos;
                if (!$reportes) {
                    $reportes = [];
                }
            } elseif ($request->get('farmacia_id') == 0) {
                $reportes = Movimiento::all();
            }
        }

        return view('reportes.index', compact('user', 'usuarios', 'reportes', 'farmacias'));
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
