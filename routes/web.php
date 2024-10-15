<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login.login_form');
});
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/login',[LoginController::class,'halamanlogin']);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');