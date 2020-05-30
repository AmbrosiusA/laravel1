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

/*Route::get('/', function () {
    $nombre = "Alex";
    return view('home',['nombre' => $nombre]);
});*/

Route::view('/','home')->name('home');
Route::view('/quienes-somos','about')->name('about');

Route::resource('portafolio', 'ProjectController')
    ->names('projects')
    ->parameters(['portafolio'=>'project']);

// Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
// Route::get('/portafolio/create', 'ProjectController@create')->name('projects.create'); 
// Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
// Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
// Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
// Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
// Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

Route::view('/contacto','contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');

Auth::routes();

