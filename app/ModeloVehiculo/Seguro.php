<?php

namespace App\ModeloVehiculo;

use Illuminate\Database\Eloquent\Model;

class Seguro extends Model
{
    protected $primaryKey = '';
    protected $fillable = [
        'seguro_id',
        'fecha_vigencia',
        'empresa_aseguradora',
        'archivo_subido',
        'observacion',
        'archivero_id',
    ];
}
