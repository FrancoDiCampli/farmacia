@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>notificaciones data</h3>

            <div class="table-responsive table-data">
                <h3 class="title-3 m-b-30">Inventarios vencidos</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <td>producto</td>
                            <td>lote</td>
                            <td>serie</td>
                            <td>vencimiento</td>
                            <td>stock</td>
                            <td>farmacia</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vencidos as $ven)
                        <tr>
                            <td> <span>
                                    <b>{{$ven->producto->nombre_comercial}}</b>
                                </span></td>
                            <td> <span>
                                    <b>{{$ven->lote}}</b>
                                </span></td>
                            <td>
                                <span class="role admin">{{$ven->serie}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$ven->vencimiento->format('d-m-Y')}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$ven->stock}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$ven->farmacia->razon_social}}</span>
                            </td>
                            <td>
                                <a href="{{route('inventarios.show', $ven->id)}}" type="button" class="btn btn-sm btn-warning">
                                    <i class="zmdi zmdi-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="table-responsive table-data">
                <h3 class="title-3 m-b-30">Inventarios que necesitan reposición</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <td>producto</td>
                            <td>lote</td>
                            <td>serie</td>
                            <td>vencimiento</td>
                            <td>stock</td>
                            <td>farmacia</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reposicion as $repo)
                        <tr>
                            <td> <span>
                                    <b>{{$repo->producto->nombre_comercial}}</b>
                                </span></td>
                            <td> <span>
                                    <b>{{$repo->lote}}</b>
                                </span></td>
                            <td>
                                <span class="role admin">{{$repo->serie}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$repo->vencimiento->format('d-m-Y')}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$repo->stock}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$repo->farmacia->razon_social}}</span>
                            </td>
                            <td>
                                <a href="{{route('inventarios.edit', $repo->id)}}" type="button" class="btn btn-sm btn-warning">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>


            <div class="table-responsive table-data">
                <h3 class="title-3 m-b-30">Inventarios con Stock Mínimo</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <td>producto</td>
                            <td>lote</td>
                            <td>serie</td>
                            <td>vencimiento</td>
                            <td>stock</td>
                            <td>farmacia</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($minimo as $min)
                        <tr>
                            <td> <span>
                                    <b>{{$min->producto->nombre_comercial}}</b>
                                </span></td>
                            <td> <span>
                                    <b>{{$min->lote}}</b>
                                </span></td>
                            <td>
                                <span class="role admin">{{$min->serie}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$min->vencimiento->format('d-m-Y')}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$min->stock}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$min->farmacia->razon_social}}</span>
                            </td>
                            <td>
                                <a href="{{route('inventarios.edit', $min->id)}}" type="button" class="btn btn-sm btn-warning">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


@endsection