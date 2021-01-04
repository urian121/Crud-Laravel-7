<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('layouts.home');
})->name('home');

/**RUTA DE AUTORES*/
Route::get('autor/', 'AutoresController@crearautor')->name('autoradd');
Route::post('autor/Store', 'AutoresController@autorStore')->name('dataAutor');
Route::get('autor/listAutores', 'AutoresController@Autores')->name('listAutores');

/**RUTAS DE LIBROS**/
Route::get('libros/add', 'LibrosController@add')->name('crearLibro');
Route::post('libros/save', 'LibrosController@guardarLibro')->name('dataLibro');
Route::get('libros/listLibros', 'LibrosController@index')->name('listLibros');


/**RUTAS DE EDITORALES*/
Route::get('editoriales/crear', 'EditorialesController@create')->name('crearEditorial');
Route::post('editoriales/save', 'EditorialesController@editorialStore')->name('editorialData');
Route::get('editoriales/misEditoriales', 'EditorialesController@lista')->name('Editoriales');

Route::get('editoriales/{id}', 'EditorialesController@vistaeditar')->name('vistaeditar');
Route::put('editoriales/{id}', 'EditorialesController@updateditorial')->name('updateEdit');
Route::get('editoriales/show/{id}', 'EditorialesController@mostraDetalles')->name('mostrarDet');
Route::DELETE('editoriales/{id}', 'EditorialesController@destroyEditorial')->name('destroyEditorial'); 
