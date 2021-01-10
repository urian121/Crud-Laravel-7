<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{

	//FUNCION DE UNO A MUCHOS, CON ESTA FUNCION EXTRAIGO EL NOMBRE EXACTO DE LA EDITORIAL DEL LIBRO.
	public function editoriales(){
		return $this->belongsTo('App\Editoriales');
		//return $this-belongsTo('App\Editoriales','editoriales_id');
	}

    protected $fillable = ['isbn','editoriales_id','titulo','sinopsis','n_paginas','portada'];
}
