@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>user data</h3>

            <div>
                <a href="{{route('usuarios.create')}}" type="button" class="btn btn-lg btn-success">
                    <i class="zmdi zmdi-plus"></i>&nbsp;
                    <span>Nuevo Usuario</span>
                </a>
            </div>

            <div class="table-responsive table-data">
                <table class="table">
                    <thead>
                        <tr>
                            <td>nombre</td>
                            <td>email</td>
                            <td>perfil</td>
                            <td>sucursal</td>
                            <td>acciones</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                        <tr>
                            <td>
                                <div class="table-data__info">
                                    <h6>{{$usuario->nombre}}</h6>

                                </div>
                            </td>
                            <td> <span>
                                    <a href="#">{{$usuario->email}}</a>
                                </span></td>
                            <td>
                                <span class="role admin">{{$usuario->perfil}}</span>
                            </td>
                            <td>
                                <span class="role admin">{{$usuario->farmacia_id}}</span>
                            </td>

                            <td>

                                <a href="{{route('usuarios.show', $usuario->id)}}" type="button" class="btn btn-sm btn-info">
                                    <i class="zmdi zmdi-eye"></i>
                                </a>

                                <a href="{{route('usuarios.edit', $usuario->id)}}" type="button" class="btn btn-sm btn-warning">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <form action="/usuarios/{{ $usuario->id }}" method="post">
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