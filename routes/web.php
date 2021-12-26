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

// Route::get('home', 'SocialController@inicio')->name('home');


/*Route::get('/home', function () {
    return view('home');
});*/

Route::get('/', 'UserController@listado');
// Route::get('/', 'PanelController@inicio');
// Route::get('/', 'home');

Auth::routes();

// PANEL DE CONTROL
// Route::get('/home', 'PanelController@inicio');
Route::get('/home', 'UserController@listado');
Route::get('panel/inicio', 'panelController@inicio');

// USUARIOS
Route::get('user/listado', 'UserController@listado');
Route::get('user/formulario/{idUser}', 'UserController@formulario');
Route::post('user/guarda', 'UserController@guarda');
Route::get('user/ajax_listado', 'UserController@ajax_listado');
Route::get('user/edita/{id}', 'UserController@edita');
Route::get('user/elimina/{id}', 'UserController@elimina');