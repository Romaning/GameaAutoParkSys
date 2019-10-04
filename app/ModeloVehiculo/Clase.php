<?php

namespace App\ModeloVehiculo;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $primaryKey = 'clase_id';
    protected $fillable = [
        'clase_descripcion'
    ];
}
