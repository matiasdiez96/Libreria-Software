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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/agregarLibro', function () {
    return view('agregarLibro');
});

Route::get('/altaVentas', function () {
    return view('altaVentas');
});

Route::get('/eliminarLibro', function () {
    return view('eliminarLibro');
});

Route::get('/modificarLibro', function () {
    return view('modificarLibro');
});