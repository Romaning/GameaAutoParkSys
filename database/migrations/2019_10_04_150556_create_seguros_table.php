<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSegurosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguros', function (Blueprint $table) {
            /*ATRIBUTOS*/
            $table->bigIncrements('seguro_id');
            $table->date('fecha_vigencia');
            $table->string('empresa_aseguradora', 191);
            $table->string('archivo_subido',191);
            $table->text('observacion');
            /*FOREIGN KEYS*/
            $table->integer('archivero_id');
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
        Schema::dropIfExists('seguros');
    }
}
