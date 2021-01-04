<?php

namespace App\Http\Controllers;

use DB;
use App\Libros;
use App\Editoriales;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $editoriales = Editoriales::all(); 
        return view('libros.add', compact('editoriales'));

        //$editoriales = DB::select('SELECT lib . * , edit . * FROM libros AS lib INNER JOIN editoriales AS edit ON lib.editoriales_id = edit.id');
       // return view('libros.add', compact('editoriales'));
    }

    
/* * * * * * * * * * * * */
/* * * * * * * * * * * * */
    public function guardarLibro(Request $request)
    {

    if ($request->hasFile('portada')) {
        $file = $request->file('portada');  
        $nombrearchivo = time()."_".$file->getClientOriginalName();  
        $file->move(public_path('/fotos/portadasLibros/'),$nombrearchivo); 

        }

        $dataLibros = new Libros([
            'isbn'=>$request->get('isbn'),
            'editoriales_id'=>$request->get('editoriales_id'),
            'titulo'=>$request->get('titulo'),
            'sinopsis'=>$request->get('sinopsis'),
            'n_paginas'=>$request->get('n_paginas'),
            'portada'=>$nombrearchivo
        ]);
        $dataLibros->save(); 
        return redirect('libros/listLibros')->with('mensaje','Editorial Registrada Satisfactoriamente !');
    }


/* * * * * * * * * * * * */
/* * * * * * * * * * * * */
    public function index(){
        $libros = Libros::orderBy('id', 'DESC')->paginate(3);
        return view('libros.listaLibros', compact('libros'));
    }


    
}
