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

    public function lecturacions()
    {
        return $this->hasMany(Lecuracion::class);
    }

    public function contribuyente()
    {
        return $this->belongsTo(Contribuyente::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
