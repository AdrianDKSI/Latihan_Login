<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;

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

Route::get('/registrasi', function () {
    return view('form_login.registrasi');
})-> name ('registrasi');

// Route::get('/login', function () {
//     return view('form_login.login');
// });

Route::get('/login2', function () {
    return view('form_login.login2');
});

Route::get('/home', function () {
    return view('Home');
});

route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
// route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
route::get('/logout',[LoginController::class,'logout'])->name('logout');
