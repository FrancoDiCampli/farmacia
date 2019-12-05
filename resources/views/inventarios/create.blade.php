@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>inventario create</h3>

            <form method="POST" action="/inventarios">
                @csrf
                <div class="row form-group">
                    <p>
                        <h4>Producto:</h4> <b>{{$producto->nombre_comercial}}</b>
                    </p>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="lote" class=" form-control-label">Lote</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="number" id="lote" name="lote" placeholder="Ingrese Lote" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="serie" class=" form-control-label">Serie</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="number" id="serie" name="serie" placeholder="Ingrese Serie" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="vencimiento" class=" form-control-label">Vencimiento</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="date" id="vencimiento" name="vencimiento" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="stock_minimo" class=" form-control-label">Stock Mínimo</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="number" value="1" id="stock_minimo" name="stock_minimo" placeholder="Ingrese Stock Mínimo" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="stock" class=" form-control-label">Stock</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="number" id="stock" name="stock" placeholder="Ingrese Stock" class="form-control">
                    </div>
                </div>

                <div hidden>
                    <input type="number" id="producto_id" name="producto_id" value="{{$producto->id}}">
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="farmacia_id" class=" form-control-label">Farmacia</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <select name="farmacia_id" id="farmacia_id" class="form-control-md form-control">
                            <option selected>Seleccione una opción</option>
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
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection