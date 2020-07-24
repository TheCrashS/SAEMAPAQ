<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cobro extends Model
{
    //
    protected $fillable = [
            'fecha_cobro',
            'contribuyente_id',
            'monto',
            'categoria_id',
            'categoria_monto'
    ];
}
