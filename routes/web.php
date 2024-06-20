<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CooperativaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('cooperativas')->name('cooperativas.')->group(function () {
    Route::get('/', [CooperativaController::class, 'index'])->name('index');
    Route::get('/ver/{id}', [CooperativaController::class, 'verDatos'])->name('ver');
    Route::get('/editar/{id}', [CooperativaController::class, 'editarDatos'])->name('editar');
    Route::put('/update/{id}', [CooperativaController::class, 'update'])->name('update');
    Route::get('/create', [CooperativaController::class, 'create'])->name('create');
    Route::post('/store', [CooperativaController::class, 'store'])->name('store');
});
