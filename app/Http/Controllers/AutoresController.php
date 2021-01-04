<?php

namespace App\Http\Controllers;

use DB;
use App\Autores;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function crearautor()
    {
        return view('autores.crear_autor');
    }


/* * * * * * * * * * * * */
/* * * * * * * * * * * * */
    public function Autores()
    {
        $autores = Autores::orderBy('id', 'DESC')->paginate(3);
        return view('autores.lista_autores', compact('autores'));
    }



/* * * * * * * * * * * * */

/* * * * * * * * * * * * */
    public function autorStore(Request $request)
    {
        
        if ($request->hasFile('foto_autor')) {
            $file = $request->file('foto_autor');  
            $nombrearchivo = time()."_".$file->getClientOriginalName();  
            $file->move(public_path('/fotos/FotoAutores/'),$nombrearchivo); 
        
        }

        $data = new Autores([
            'nombres'=>$request->get('nombres'),
            'apellidos'=>$request->get('apellidos'),
            'foto_autor'=>$nombrearchivo
        ]);
        $data->save(); 

        return redirect('autor')->with('mensaje','Autor Guardado Satisfactoriamente !');
    }
    

}
