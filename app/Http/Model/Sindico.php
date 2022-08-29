<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Sindico extends Model
{
    protected $fillable = [
        'usuario_id',
        'condominio_id',
        'name'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
        ];
}
