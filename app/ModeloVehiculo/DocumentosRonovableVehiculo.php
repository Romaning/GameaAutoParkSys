<?php

namespace App\ModeloVehiculo;

use Illuminate\Database\Eloquent\Model;

class DocumentosRonovableVehiculo extends Model
{
    protected $primaryKey = 'archivero_id';
    protected $fillable = [
        'gestion',
        'fecha_fin_cobertura_soat',
        'bsisa',
        'inspeccion_vehicular',
        'placa_id',
    ];
}
