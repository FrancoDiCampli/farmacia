@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>producto show</h3>

            @if($producto->tipo == 'Farmacia')
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="gtin" class=" form-control-label">GTIN</label>
                </div>
                <div class="col-12 col-md-6">
                    <input type="number" id="gtin" name="gtin" disabled value="{{$producto->gtin}}" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="nombre_generico" class=" form-control-label">Nombre Genérico</label>
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" id="nombre_generico" name="nombre_generico" disabled value="{{$producto->nombre_generico}}" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="presentacion" class=" form-control-label">Presentación</label>
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" id="presentacion" name="presentacion" disabled value="{{$producto->presentacion}}" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="nombre_comercial" class=" form-control-label">Nombre Comercial</label>
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" id="nombre_comercial" name="nombre_comercial" disabled value="{{$producto->nombre_comercial}}" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="numero_certificado" class=" form-control-label">Número Certificado</label>
                </div>
                <div class="col-12 col-md-6">
                    <input type="number" id="numero_certificado" name="numero_certificado" disabled value="{{$producto->numero_certificado}}" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="laboratorio" class=" form-control-label">Laboratorio</label>
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" id="laboratorio" name="laboratorio" disabled value="{{$producto->laboratorio}}" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="forma_farmaceutica" class=" form-control-label">Forma Farmaceútica</label>
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" id="forma_farmaceutica" name="forma_farmaceutica" disabled value="{{$producto->forma_farmaceutica}}" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="envase_secundario" class=" form-control-label">Envase Secundario</label>
                </div>
                <div class="col-12 col-md-6">
                    <img src="{{$producto->envase_secundario}}" alt="">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="condicion_expendio" class=" form-control-label">Condición Expendio</label>
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" id="condicion_expendio" name="condicion_expendio" disabled value="{{$producto->condicion_expendio}}" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="via_administracion" class=" form-control-label">Via Administración</label>
                </div>
                <div class="col-12 col-md-6">
                    <input type="number" id="via_administracion" name="via_administracion" disabled value="{{$producto->via_administracion}}" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="gln_proveedor" class=" form-control-label">GLN Proveedor</label>
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" id="gln_proveedor" name="gln_proveedor" disabled value="{{$producto->gln_proveedor}}" class="form-control">
                </div>
            </div>
            @endif

            @if($producto->tipo == 'Perfumeria')
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="nombre_comercial" class=" form-control-label">Nombre Comercial</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled value="{{$producto->nombre_comercial}}" type="text" id="nombre_comercial" name="nombre_comercial" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="presentacion" class=" form-control-label">Presentación</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled value="{{$producto->presentacion}}" type="text" id="presentacion" name="presentacion" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="laboratorio" class=" form-control-label">Laboratorio</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled value="{{$producto->laboratorio}}" type="text" id="laboratorio" name="laboratorio" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="envase_secundario" class=" form-control-label">Envase Secundario</label>
                </div>
                <div class="col-12 col-md-6">
                    <img src="{{$producto->envase_secundario}}" alt="">
                </div>
            </div>
            @endif

        </div>
    </div>
</div>


@endsection