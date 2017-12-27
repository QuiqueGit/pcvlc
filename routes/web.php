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

Route::get('{tabla}','Controller_One@showData'); //Al pulsar sobre una sección del sidebar(que ya lleva implícito en html el enlace /componentes etc etc), pasamos ese nombre como nombre de la tabla. Generamos una función genérica en el Controller_One llamado showData, que recibirá como parámetro el nombre de la tabla a mostrar...

Route::get('producto/{id}','Controller_One@showProduct'); //Le pasamos al método del controlador la id del producto en el que se haga click, para mostrarlo individualmente

