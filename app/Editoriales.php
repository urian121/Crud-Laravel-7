<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editoriales extends Model
{

	/**FUNCION DE UNO A MUCHOS**/
	public function libros(){
		return $this->belongsTo('App\Libros');
		//return $this->belongsTo('App\Model\Libros');
	}


     protected $fillable = ['nombre', 'sede'];
}
