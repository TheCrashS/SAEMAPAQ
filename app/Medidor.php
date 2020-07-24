<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medidor extends Model
{
    //
    protected $fillable = [
        'codigo',
        'val_1',
        'val_2',
        'val_3',
        'estado',
        'direccion',
        'contribuyente_id',
        'categoria_id'
    ];
}
