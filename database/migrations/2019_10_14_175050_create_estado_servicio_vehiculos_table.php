<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoServicioVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_servicio_vehiculos', function (Blueprint $table) {
            $table->bigIncrements('est_serv_vehiculo_id');
            $table->date('fecha_inicio');
            $table->string('motivo');
            $table->integer('est_id');
            $table->string('placa_id');
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
        Schema::dropIfExists('estado_servicio_vehiculos');
    }
}
