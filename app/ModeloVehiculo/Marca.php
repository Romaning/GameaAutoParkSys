<?php

namespace App\ModeloVehiculo;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $primaryKey='marca_id';
    protected $fillable=[
        'marca_descripcion',
    ];
}
