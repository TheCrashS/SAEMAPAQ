<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $fillable = [
        'nombre','tarifa'
    ];

    public function medidors()
    {
        return $this->hasMany(Medidor::class);
    }
}
