<?php

use App\Http\Controllers\ArteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class,'index'])->name('index');

Route::get('register', [LoginController::class,'showRegister'])->name('register');
Route::post('register', [LoginController::class,'register']);

Route::get('login', [LoginController::class,'index'])->name('login');
Route::post('login', [LoginController::class,'verify'])->name('verify');

Route::post('salir',[LoginController::class,'logout'])->name('logout');


