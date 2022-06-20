<?php

use App\Http\Controllers\LivroController;
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
Route::put('/livro/update/{id}', [LivroController::class, 'Update'])->name('update');
Route::post('/livro/edit/{id}', [LivroController::class, 'Edit'])->name('edit');
Route::delete('/livro/delete/{id}', [LivroController::class, 'Destroy'])->name('delete');
Route::post('/livro/store', [LivroController::class, 'Store'])->name('store');
Route::get('/livro/create', [LivroController::class, 'Create'])->name('create');
Route::get('/livro', [LivroController::class, 'Index'])->name('index');

Route::get('/', [LivroController::class, 'Index'])->name('main');
