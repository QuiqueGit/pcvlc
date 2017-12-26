<?php

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

Route::get('/','Controller_One@showNovedades'); //página principal, se muestra carousel y novedades

Route::post('login','UserController@checkUser'); //al enviar el formulario de login

Route::get('registro','UserController@setRegistro'); //al pinchar sobre ¡Resgístrate! en el login

Route::post('registro','UserController@crearUser'); //al pulsar el botón de registrar en el form de registro

Route::get('componentes','Controller_One@showComponentes'); //sidebar, componentes

Route::get('producto/{id}','Controller_One@showProduct'); //Le pasamos al método del controlador la id del producto en el que se haga click, para mostrarlo individualmente

