<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table= 'usuarios';
    protected $fillable = ['CPF','name','numero','email','data_nasc'];
    protected $dates = ['created_at','updated_at','data_nasc'];

}
