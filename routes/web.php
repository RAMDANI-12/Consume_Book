<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
    return view('welcome');
});

Route::get('/book', [BookController::class, 'index']); 
Route::get('/book/create', [BookController::class, 'create']);
Route::post('/book/store', [BookController::class, 'store']);
Route::get('/book/{id}', [BookController::class, 'show']);
Route::get('/book/edit/{id}', [BookController::class, 'edit']);
Route::patch('/book/update/{id}', [BookController::class, 'update']);
Route::delete('/book/delete/{id}', [BookController::class, 'destroy']);