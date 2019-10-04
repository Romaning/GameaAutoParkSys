<?php

namespace App\ModeloVehiculo;

use Illuminate\Database\Eloquent\Model;

class DocumentosPropiedadVehiculo extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'archivo_subido',
        'nombre_documento_propiedad',
        'placa_id',
    ];
}
