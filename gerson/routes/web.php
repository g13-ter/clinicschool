<?php
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

 
Route::get('/login', [LoginController::class, 'index'])->name('login.form');

// Handle login form submit
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Welcome page after login
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');