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

Route::get('/', ['uses' => 'FrontController@index', 'as' => 'front.index']);
Route::get('/nosotros', ['uses' => 'FrontController@nosotros', 'as' => 'front.nosotros']);
Route::get('/servicios',['uses' => 'FrontController@servicios', 'as' => 'front.servicios']);
Route::get('/contacto', ['uses' => 'FrontController@contacto','as' => 'front.contacto']);
Route::get('/mensaje',['uses' => 'FrontController@mensaje', 'as' => 'front.mensaje']);
