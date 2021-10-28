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

Route::get('/', 'PaginaController@inicio')->name('inicio');
Route::get('/nosotros', 'PaginaController@nosotros')->name('nosotros');
Route::get('/servicios', 'PaginaController@servicios')->name('servicios');
Route::get('/contacto', 'PaginaController@contacto')->name('contacto');

