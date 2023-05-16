<?php

use App\Http\Controllers\MerekOtomotifController;
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

Route::get('/', [MerekOtomotifController::class, 'index']);
Route::get('/tambah', [MerekOtomotifController::class, 'tambah']);
Route::post('/tambah', [MerekOtomotifController::class, 'store']);
Route::get('/hapus/{id}', [MerekOtomotifController::class, 'hapus']);
Route::get('/edit/{id}', [MerekOtomotifController::class, 'edit']);
Route::post('/edit/{id}', [MerekOtomotifController::class, 'update']);
Route::get('/lihat/{id}', [MerekOtomotifController::class, 'lihat']);

