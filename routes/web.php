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
    return view('auth.login');
});

Route::resource('dispositivo', 'App\Http\Controllers\dispositivoController');

Route::resource('categoria', 'App\Http\Controllers\CategoriaController');

Route::resource('reserva', 'App\Http\Controllers\ReservaController');

Route::resource('destinatario', 'App\Http\Controllers\DestinatarioController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
