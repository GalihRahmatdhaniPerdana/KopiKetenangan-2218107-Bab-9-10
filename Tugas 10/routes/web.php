<?php

use App\Http\Controllers\katalogController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/katalog', [katalogController::class, 'index']);
Route::get('/katalog/tambah', [katalogController::class, 'create']);
Route::post('/katalog/store', [katalogController::class, 'store']);
Route::get('/katalog/edit/{id}', [katalogController::class, 'edit']);
Route::put('/katalog/update/{id}', [katalogController::class, 'update']);
Route::get('/katalog/hapus/{id}', [katalogController::class, 'delete']);
Route::get('/katalog/destroy/{id}', [katalogController::class, 'destroy']);

Route::get('/katalog/cetak', [katalogController::class, 'cetak']);