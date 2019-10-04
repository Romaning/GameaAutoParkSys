<?php

namespace App\ModeloVehiculo;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $primaryKey = 'placa_id';
    protected $fillable = [
        'numero_crpva',
        'numero_chasis',
        'numero_motor',
        'documento_iportacion',
        'numero_documento_iportacion',
        'plazas',
        'ruedas',
        'traccion',
        'estado_servicio',
        'clase_id',
        'marca_id',
        'tipo_id',
        'tipo_combustible_id',
        'tipo_uso',
    ];
}
