@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>user edit</h3>

            <form method="POST" action="/usuarios/{{$usuario->id}}">
                @method('PUT')
                @csrf

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="nombre" class=" form-control-label">Nombre</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nombre" name="nombre" value="{{$usuario->nombre}}" placeholder="Ingrese Nombre" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="direccion" class=" form-control-label">Dirección</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="direccion" name="direccion" value="{{$usuario->direccion}}" placeholder="Ingrese Dirección" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="telefono" class=" form-control-label">Teléfono</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="telefono" name="telefono" value="{{$usuario->telefono}}" placeholder="Ingrese Teléfono" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email" class=" form-control-label">Email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="email" name="email" value="{{$usuario->email}}" placeholder="Ingrese Email" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="password" class=" form-control-label">Password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="password" name="password" value="{{$usuario->password}}" placeholder="Ingrese Password" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="perfil" class=" form-control-label">Perfil</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="perfil" id="perfil" class="form-control-md form-control">
                            <option value="{{$usuario->perfil}}">{{$usuario->perfil}}</option>
                            <option value="1">Administrador</option>
                            <option value="2">Director</option>
                            <option value="3">Auxiliar Farmaceútico</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="farmacia_id" class=" form-control-label">Farmacia</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="farmacia_id" id="farmacia_id" class="form-control-md form-control">
                            <option value="{{$usuario->farmacia->id}}">{{$usuario->farmacia->razon_social}}</option>
                            @foreach($farmacias as $farmacia)
                            <option value="{{$farmacia->id}}">{{$farmacia->razon_social}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>


@endsection