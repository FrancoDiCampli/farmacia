@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>inventarios data</h3>

            <div>
                <form action="/inventarios/" method="GET">
                    <div class="col-12 col-md-6">
                        <input type="text" id="buscar" name="buscar" placeholder="Buscar Producto" class="form-control">
                        <button class="btn btn-lg btn-info" type="submit"><i class="zmdi zmdi-search"></i></button>
                    </div>
                </form>
            </div>

            @if($producto)
            <div class="table-responsive table-data">
                <h3 class="title-3 m-b-30">Producto</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <td>tipo</td>
                            <td>gtin</td>
                            <td>nombre genérico</td>
                            <td>presentación</td>
                            <td>nombre comercial</td>
                            <td>laboratorio</td>
                            <td>stock total</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="table-data__info">
                                    <b>{{$producto->tipo}}</b>

                                </div>
                            </td>
                            <td>
                                <div class="table-data__info">
                                    <h6>{{$producto->gtin}}</h6>

                                </div>
                            </td>
                            <td> <span>
                                    <b>{{$producto->nombre_generico}}</b>
                                </span></td>
                            <td>
                                <span class="role admin">{{$producto->presentacion}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$producto->nombre_comercial}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$producto->laboratorio}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$producto->inventarios->sum('stock')}}</span>
                            </td>
                            <td>
                                <a href="{{route('inventarios.create', $producto->id)}}" type="button" class="btn btn-sm btn-success">
                                    <i class="zmdi zmdi-plus"></i>&nbsp;
                                    <span>Nuevo Inventario</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive table-data">
                <h3 class="title-3 m-b-30">Inventarios</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <td>lote</td>
                            <td>serie</td>
                            <td>vencimiento</td>
                            <td>stock</td>
                            <td>farmacia</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($inventarios as $inventario)
                        <tr>
                            <td> <span>
                                    <b>{{$inventario->lote}}</b>
                                </span></td>
                            <td>
                                <span class="role admin">{{$inventario->serie}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$inventario->vencimiento->format('d-m-Y')}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$inventario->stock}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$inventario->farmacia->razon_social}}</span>
                            </td>

                            <td>

                                <a href="{{route('inventarios.show', $inventario->id)}}" type="button" class="btn btn-sm btn-info">
                                    <i class="zmdi zmdi-eye"></i>
                                </a>

                                <a href="{{route('inventarios.edit', $inventario->id)}}" type="button" class="btn btn-sm btn-warning">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <form action="/inventarios/{{ $inventario->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-sm btn-error" type="submit"><i class="zmdi zmdi-delete"></i></button>
                                </form>
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