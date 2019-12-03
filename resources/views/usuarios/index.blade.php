@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>user data</h3>

            <div class="table-responsive table-data">
                <table class="table">
                    <thead>
                        <tr>
                            <td>nombre</td>
                            <td>email</td>
                            <td>perfil</td>
                            <td>sucursal</td>
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

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


@endsection
