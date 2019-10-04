<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            /*ATRIBUTOS*/
            $table->string('placa_id',100)->primary();
            $table->string('numero_crpva',100);
            $table->string('numero_chasis',100);
            $table->string('numero_motor',100);
            $table->string('documento_iportacion',100);
            $table->integer('numero_documento_iportacion');
            $table->integer('plazas');
            $table->integer('ruedas');
            $table->string('traccion',100);
            $table->enum('estado_servicio',['activo','inactivo','baja']);
            /*FOREIGN KEYS*/
            $table->integer('clase_id');
            $table->integer('marca_id');
            $table->integer('tipo_id');
            $table->integer('tipo_combustible_id');
            $table->integer('tipo_uso');
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
        Schema::dropIfExists('vehiculos');
    }
}
