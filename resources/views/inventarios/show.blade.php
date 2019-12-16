@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>inventario show</h3>

            <div class="row form-group">
                <p>
                    <h4>Producto:</h4> <b>{{$inventario->producto->nombre_comercial}}</b>
                </p>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="lote" class=" form-control-label">Lote</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled value="{{$inventario->lote}}" type="number" id="lote" name="lote" placeholder="Ingrese Lote" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="serie" class=" form-control-label">Serie</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled value="{{$inventario->serie}}" type="number" id="serie" name="serie" placeholder="Ingrese Serie" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="vencimiento" class=" form-control-label">Vencimiento</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled value="{{$inventario->vencimiento->format('d-m-Y')}}" type="text" id="vencimiento" name="vencimiento" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="stock_minimo" class=" form-control-label">Stock Mínimo</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled type="number" value="{{$inventario->stock_minimo}}" id="stock_minimo" name="stock_minimo" placeholder="Ingrese Stock Mínimo" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="stock" class=" form-control-label">Stock</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled value="{{$inventario->stock}}" type="number" id="stock" name="stock" placeholder="Ingrese Stock" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="farmacia_id" class=" form-control-label">Farmacia</label>
                </div>
                <div class="col-12 col-md-6">
                    <input disabled value="{{$inventario->farmacia->razon_social}}" type="number" id="farmacia_id" name="farmacia_id" placeholder="{{$inventario->farmacia->razon_social}}" class="form-control">
                </div>
            </div>

        </div>
    </div>
</div>

@endsection