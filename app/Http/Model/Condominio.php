<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    protected $table = 'condominios';
    protected $fillable = [
        'sindico_id',
        'name',
        'endereco'

    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];


    public function sindico()
    {
        return $this->hasOne(Usuario::class,'sindico_id','id');
    }

    public function apartamentos()
    {
//        return $this->hasMany(Usuario::class,)
    }
}
