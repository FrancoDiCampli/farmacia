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
        $farmacias = Farmacia::all();
        if ($request->get('farmacia_id')) {
            $inventarios = Inventario::where('farmacia_id', $request->get('farmacia_id'))->get();
            foreach ($inventarios as $inv) {
                $reportes[] = $inv->movimientos;
            }
            if (isset($reportes)) {
                $reportes = collect($reportes)->flatten();
            } else {
                $reportes = [];
            }
        } else {
            if ($user->perfil == 2) {
                $inventarios = $user->farmacia->inventarios;
                foreach ($inventarios as $inv) {
                    $reportes[] = $inv->movimientos;
                }
                if (isset($reportes)) {
                    $reportes = collect($reportes)->flatten();
                } else {
                    $reportes = [];
                }
            } else {
                $reportes = $user->movimientos;
                if (!$reportes) {
                    $reportes = [];
                }
            }
        }

        return view('reportes.index', compact('user', 'reportes', 'farmacias'));
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
