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
    return view('pages/pagina_principal');
});
Route::get('sis', function () {
    return view('pages/sistemas');
});
Route::get('ind', function () {
    return view('pages/industrial');
});
Route::get('ges', function () {
    return view('pages/gestion');
});
