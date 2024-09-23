<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Paginainicial;
use App\Http\Controllers\Substratos;

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', [Paginainicial::class, 'index'])->name('home');
Route::get('/substratos', [Substratos::class, 'index'])->name('substratos');


Route::get('/substratos/aço', [Substratos::class, 'aço'])->name('aço');
Route::get('/substratos/aluminio', [Substratos::class, 'aluminio'])->name('aluminio');
Route::get('/substratos/fundido', [Substratos::class, 'fundido'])->name('fundido');
Route::get('/substratos/zinco', [Substratos::class, 'zinco'])->name('zinco');
Route::get('/substratos/equipe', [Substratos::class, 'equipe'])->name('team');
