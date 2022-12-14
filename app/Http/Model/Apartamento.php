<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model
{
    protected $fillable = [
        'num_andar',
        'condominio_id',
        'usuario_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
