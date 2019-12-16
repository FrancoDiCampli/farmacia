@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>user show</h3>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="nombre" class=" form-control-label">Nombre</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled type="text" id="nombre" name="nombre" value="{{$usuario->nombre}}" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="direccion" class=" form-control-label">Dirección</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled type="text" id="direccion" name="direccion" value="{{$usuario->direccion}}" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="telefono" class=" form-control-label">Teléfono</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled type="text" id="telefono" name="telefono" value="{{$usuario->telefono}}" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled type="email" id="email" name="email" value="{{$usuario->email}}" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="password" class=" form-control-label">Password</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled type="password" id="password" name="password" value="{{$usuario->password}}" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="perfil" class=" form-control-label">Perfil</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled type="text" id="perfil" name="perfil" value="{{$usuario->perfil}}" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="farmacia" class=" form-control-label">Farmacia</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled type="text" id="farmacia" name="farmacia" value="{{$usuario->farmacia->razon_social}}" class="form-control">
                </div>
            </div>

        </div>
    </div>
</div>


@endsection