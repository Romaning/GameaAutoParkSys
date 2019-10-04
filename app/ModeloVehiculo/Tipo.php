<?php

namespace App\ModeloVehiculo;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $primaryKey = 'tipo_id';
    protected $fillable = [
        'tipo_descripcion',
    ];
}
