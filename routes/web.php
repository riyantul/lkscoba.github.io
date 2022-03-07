<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserControlController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\WebInformasiController;

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
Route::get('/',[ViewController::class,'index']);
Route::get('/daftarkaryawan',[ViewController::class,'daftarkaryawan']);

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'authenticate']);


Route::get('/register',[LoginController::class,'register']);
Route::post('/register',[LoginController::class,'store']);

Route::get('/admin',[DashboardController::class,'index']);
Route::resource('/user',UserControlController::class);
Route::resource('/karyawan',KaryawanController::class);



//website informasi
Route::get('/visimisi',[WebInformasiController::class, 'visimisi']);


