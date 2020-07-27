<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturacion extends Model
{
    //
    protected $fillable = [
        'fecha_lectura',
        'consumo',
        'medidor_id',
        'monto',
        'fecha_cobro',
        'estado_pago'

    ];

    public function medidor()
    {
        return $this->belongsTo(Medidor::class);
    }

}
