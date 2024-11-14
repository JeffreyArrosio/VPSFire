<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseAuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [FirebaseAuthController::class, 'showRegisterForm'])->name('register');

Route::post('/register', [FirebaseAuthController::class, 'register'])->name('register.post');

Route::get('/login', [FirebaseAuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [FirebaseAuthController::class, 'login'])->name('login.post');

Route::get('/dashboard', [FirebaseAuthController::class, 'home']);
