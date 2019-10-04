<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosPropiedadVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_propiedad_vehiculos', function (Blueprint $table) {
            /*ATRIBUTOS*/
            $table->bigIncrements('id');
            $table->string('archivo_subido');
            $table->string('nombre_documento_propiedad');
            /*FOREIGN KEYS*/
            $table->integer('placa_id');
            /*FECHA DE CREACION, ACTUALIZACION Y ELIMINACION LÓGICA*/
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos_propiedad_vehiculos');
    }
}
