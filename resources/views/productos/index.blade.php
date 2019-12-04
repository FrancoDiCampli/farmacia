@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>productos data</h3>

            <div>
                <a href="{{route('productos.create')}}" type="button" class="btn btn-lg btn-success">
                    <i class="zmdi zmdi-plus"></i>&nbsp;
                    <span>Nuevo Producto</span>
                </a>
            </div>

            <div class="table-responsive table-data">
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
                        @foreach ($productos as $producto)
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
                                    <a href="#">{{$producto->nombre_generico}}</a>
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

                                <a href="{{route('productos.show', $producto->id)}}" type="button" class="btn btn-sm btn-info">
                                    <i class="zmdi zmdi-eye"></i>
                                </a>

                                <a href="{{route('productos.edit', $producto->id)}}" type="button" class="btn btn-sm btn-warning">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <form action="/productos/{{ $producto->id }}" method="post">
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

        </div>
    </div>

</div>


@endsection