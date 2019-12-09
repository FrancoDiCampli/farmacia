@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>producto edit</h3>

            @if($producto->tipo == 'Farmacia')
            <div>
                <form method="POST" action="/productos/{{$producto->id}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="gtin" class=" form-control-label">GTIN</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input value="{{$producto->gtin}}" type="number" id="gtin" name="gtin" placeholder="Ingrese GTIN" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="nombre_generico" class=" form-control-label">Nombre Genérico</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input value="{{$producto->nombre_generico}}" type="text" id="nombre_generico" name="nombre_generico" placeholder="Ingrese Nombre Genérico" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="presentacion" class=" form-control-label">Presentación</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input value="{{$producto->presentacion}}" type="text" id="presentacion" name="presentacion" placeholder="Ingrese Presentación" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="nombre_comercial" class=" form-control-label">Nombre Comercial</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input value="{{$producto->nombre_comercial}}" type="text" id="nombre_comercial" name="nombre_comercial" placeholder="Ingrese Nombre Comercial" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="numero_certificado" class=" form-control-label">Número Certificado</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input value="{{$producto->numero_certificado}}" type="number" id="numero_certificado" name="numero_certificado" placeholder="Ingrese Número Certificado" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="laboratorio" class=" form-control-label">Laboratorio</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input value="{{$producto->laboratorio}}" type="text" id="laboratorio" name="laboratorio" placeholder="Ingrese Laboratorio" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="forma_farmaceutica" class=" form-control-label">Forma Farmaceútica</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input value="{{$producto->forma_farmaceutica}}" type="text" id="forma_farmaceutica" name="forma_farmaceutica" placeholder="Ingrese Forma Farmaceútica" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="envase_secundario" class=" form-control-label">Envase Secundario</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="envase_secundario" name="envase_secundario">
                                <label class="custom-file-label" for="envase_secundario">Seleccionar Archivo</label>
                                <img src="{{$producto->envase_secundario}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="condicion_expendio" class=" form-control-label">Condición Expendio</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <select name="condicion_expendio" id="condicion_expendio" class="form-control-md form-control">
                                <option value="{{$producto->condicion_expendio}}">{{$producto->condicion_expendio}}</option>
                                <option value="Venta Libre">Venta Libre</option>
                                <option value="Venta Bajo Receta">Venta Bajo Receta</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="via_administracion" class=" form-control-label">Via Administración</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input value="{{$producto->via_administracion}}" type="number" id="via_administracion" name="via_administracion" placeholder="Ingrese Via Administración" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="gln_proveedor" class=" form-control-label">GLN Proveedor</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input value="{{$producto->gln_proveedor}}" type="text" id="gln_proveedor" name="gln_proveedor" placeholder="Ingrese GLN Proveedor" class="form-control">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>

                </form>
            </div>
            @endif

            @if($producto->tipo == 'Perfumeria')
            <div>
                <form method="POST" action="/productos/{{$producto->id}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="nombre_comercial" class=" form-control-label">Nombre Comercial</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="nombre_comercial" name="nombre_comercial" placeholder="Ingrese Nombre Comercial" class="form-control" value="{{$producto->nombre_comercial}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="presentacion" class=" form-control-label">Presentación</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="presentacion" name="presentacion" placeholder="Ingrese Presentación" class="form-control" value="{{$producto->presentacion}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="laboratorio" class=" form-control-label">Laboratorio</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="laboratorio" name="laboratorio" placeholder="Ingrese Laboratorio" class="form-control" value="{{$producto->laboratorio}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="envase_secundario" class=" form-control-label">Envase Secundario</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="envase_secundario" name="envase_secundario">
                                <label class="custom-file-label" for="envase_secundario">Seleccionar Archivo</label>
                                <img src="{{$producto->envase_secundario}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>

                </form>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection