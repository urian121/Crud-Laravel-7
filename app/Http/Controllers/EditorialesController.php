<?php

namespace App\Http\Controllers;

use DB;
use App\Editoriales;
use Illuminate\Http\Request;

class EditorialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lista()
    {
        $editoriales = Editoriales::orderBy('id', 'DESC')->paginate(3);
        return view('editoriales/misEditoriales', compact('editoriales'));
    }
    

/* * * * * * * * * * * * */
/* * * * * * * * * * * * */
    public function create()
    {
         return view('editoriales.crear');
    }



/* * * * * * * * * * * * */
/* * * * * * * * * * * * */
    public function editorialStore(Request $request)
    {
        $DatosEditorial = new Editoriales([
            'nombre'=>$request->get('nombre'),
            'sede'=>$request->get('sede')
        ]);
        $DatosEditorial->save();

        return redirect('editoriales/misEditoriales')->with('mensaje','Editorial Registrada Satisfactoriamente !');
      }


/* * * * * * * * * * * * */
/* * * * * * * * * * * * */
    public function vistaeditar($id)
      {
          $editorial = Editoriales::findOrFail($id);
          return view('editoriales.editar', compact('editorial'));
      }



/* * * * * * * * * * * * */
/* * * * * * * * * * * * */
    public function updateditorial(Request $request, $id)
      {
  
        if($request->ajax()){
            $editorial = Editoriales::find($id);
            $editorial->nombre       = $request->nombre;
            $editorial->sede     = $request->sede;
    
            $editorial->save();
    
            /**retornamos una repuesta de tipo json*/
            return response()->json([
                'message'=> 'La Información fue Actualizada Correctamente.'
            ]);
        }
    }


    
/* * * * * * * * * * * * */
/* * * * * * * * * * * * */  
    public function mostraDetalles($id)
      {
        $editorial = Editoriales::findOrFail($id);
        return view('editoriales.mostrarDestalles', compact('editorial'));
      }


/* * * * * * * * * * * * */
/* * * * * * * * * * * * */
    public function destroyEditorial(Request $request, $id)
    {
        if($request->ajax()){
            $editorial = Editoriales::find($id); 
            $editorial->delete(); 

            return response()->json([
                'message'=> 'La Editorial ('. $editorial->nombre .') fue Borrada.'
            ]);
        }

    }


}
