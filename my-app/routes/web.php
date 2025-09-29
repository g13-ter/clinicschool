<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
// Registration disabled - only admins can create accounts

// Protected routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'showDashboard'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Form routes
    Route::prefix('forms')->name('forms.')->group(function () {
        Route::get('/student', function () {
            return view('forms.student-form');
        })->name('student');
        Route::get('/clinic', function () {
            return view('forms.clinic-form');
        })->name('clinic');
        Route::get('/medicine', function () {
            return view('forms.medicine-form');
        })->name('medicine');
        Route::get('/staff', function () {
            return view('forms.staff-form');
        })->name('staff');
        Route::get('/report', function () {
            return view('forms.report-form');
        })->name('report');
        Route::get('/setting', function () {
            return view('forms.setting-form');
        })->name('setting');
    });
});

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/users/create', [App\Http\Controllers\AdminController::class, 'createUser'])->name('create-user');
    Route::post('/users', [App\Http\Controllers\AdminController::class, 'storeUser'])->name('store-user');
    Route::get('/users/{user}/edit', [App\Http\Controllers\AdminController::class, 'editUser'])->name('edit-user');
    Route::put('/users/{user}', [App\Http\Controllers\AdminController::class, 'updateUser'])->name('update-user');
    Route::post('/users/{user}/toggle-status', [App\Http\Controllers\AdminController::class, 'toggleUserStatus'])->name('toggle-user-status');
    Route::delete('/users/{user}', [App\Http\Controllers\AdminController::class, 'deleteUser'])->name('delete-user');
});
