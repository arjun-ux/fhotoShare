<?php

use App\Http\Controllers\FhotoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
// route untuk uplload
Route::get('/upload', [FhotoController::class, 'index'])->name('upload');
Route::post('/upload', [FhotoController::class, 'store'])->name('upload.store');
Route::get('/list', [FhotoController::class, 'list'])->name('list');

// route untuk home
// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::post('/hasil', [HomeController::class, 'cariFoto'])->name('cariFoto');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hasil', [HomeController::class, 'hasilFoto'])->name('hasilFoto');
