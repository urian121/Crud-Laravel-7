<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autores extends Model
{
    protected $fillable =[
        'nombres','apellidos','foto_autor'
    ];
}
