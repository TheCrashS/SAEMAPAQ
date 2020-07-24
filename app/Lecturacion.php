<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturacion extends Model
{
    //
    protected $fillable = [
        'fecha_lectura',
        'consumo',
        'medidor_id'
    ];

}
