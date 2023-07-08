<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\resepContoroller;
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

Route::get('/', function () {
    return view('login');
})->middleware('guest');
Route::get('/register', function () {
    return view('register');
})->middleware('guest');

Route::post('/logout',[loginController::class,'logout']);
Route::post('/simpan',[loginController::class,'simpan']);
Route::post('/masuk',[loginController::class,'masuk']);
Route::get('/home', function () {
    return view('template/home');
});
Route::get('/input', function () {
    return view('resep/input');
});
Route::post('/inputResep',[resepContoroller::class,'inputResep']);
Route::get('/home',[resepContoroller::class,'home']);
Route::get('/detail/{id}',[resepContoroller::class,'detail']);