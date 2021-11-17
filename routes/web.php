<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreguntasController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['register' => true, 'reset' => false]);
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//menu del administrador
Route::get('/administrador', [App\Http\Controllers\HomeController::class, 'index'])->name('administrador');
Route::resource('admin', PreguntasController::class)->middleware('auth');
//Route::get('/administrador/adminPreguntas', [App\Http\Controllers\PreguntasController::class, 'index'])->name('adminPreguntas');
