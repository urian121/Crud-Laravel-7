<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    protected $fillable = ['isbn','editoriales_id','titulo','sinopsis','n_paginas','portada'];
}
