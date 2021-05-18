<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\BerkasController;

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
Route::get('/user', [UserController::class, 'index']);
Route::get('/user{nama}', [UserController::class, 'setName']);
Route::post('/user', [UserController::class, 'setBio']);
Route::get('/list-stok', [StokController::class, 'list']);
Route::get('/tambah',function(){
    return view('tambah');
});
Route::post('/tambah',[StokController::class, 'tambah']);
Route::get('/hapus/{id}',[StokController::class,'hapus']);
Route::get('/ubah/{id}',[StokController::class,'ubah']);
Route::post('/simpan',[StokController::class,'simpan']);

Route::get('/unggah', function(){
    return view('from-unggah');
});
Route::post('/unggah' ,[ BerkasController::class, 'unggah']);

Route::get('/unduh' ,[ BerkasController::class, 'unduh']);



