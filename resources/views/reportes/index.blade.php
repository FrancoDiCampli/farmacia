@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>reportes data</h3>

            @if($user->perfil == 1)
            <div>
                <form action="/reportes/" method="GET">


                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="farmacia_id" class=" form-control-label">Farmacia</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <select name="farmacia_id" id="farmacia_id" class="form-control-md form-control">
                                <option value="0">Seleccione una opción</option>
                                @foreach($farmacias as $farmacia)
                                <option value="{{$farmacia->id}}">{{$farmacia->razon_social}}</option>
                                @endforeach
                            </select>
                            <button class="btn btn-lg btn-info" type="submit"><i class="zmdi zmdi-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            @endif

            @if($reportes)
            <div class="table-responsive table-data">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Tipo Movimiento</td>
                            <td>Cantidad</td>
                            <td>Fecha Movimiento</td>
                            <td>Producto</td>
                            <td>Usuario</td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($reportes as $reporte)
                        <tr>
                            <td> <span>
                                    <b>{{$reporte->tipo_movimiento}}</b>
                                </span></td>
                            <td>
                                <span class="role admin">{{$reporte->cantidad}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$reporte->fecha_movimiento->format('d-m-Y')}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$reporte->inventario->producto->nombre_comercial}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$reporte->usuario->nombre}}</span>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>

</div>


@endsection