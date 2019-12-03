<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('gtin');
            $table->string('nombre_generico');
            $table->string('presentacion');
            $table->string('nombre_comercial');
            $table->integer('numero_certificado');
            $table->string('laboratorio');
            $table->string('forma_farmaceutica');
            $table->string('envase_secundario');

            $table->string('condicion_expendio');
            $table->integer('via_administracion');
            $table->string('gln_proveedor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
