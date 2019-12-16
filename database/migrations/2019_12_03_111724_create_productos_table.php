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
            $table->integer('gtin')->nullable();
            $table->string('nombre_generico')->nullable();
            $table->string('presentacion');
            $table->string('nombre_comercial');
            $table->integer('numero_certificado')->nullable();
            $table->string('laboratorio');
            $table->string('forma_farmaceutica')->nullable();
            $table->string('envase_secundario')->nullable();
            $table->string('tipo');
            $table->string('condicion_expendio')->nullable();
            $table->integer('via_administracion')->nullable();
            $table->string('gln_proveedor')->nullable();
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
