<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contribuyente extends Model
{
    //
    protected $fillable = [
        'nombres',
        'apellidos',
        'ci',
        'fecha_nac',
        'telefono',
        'direccion',
        'estado'
    ];
}
