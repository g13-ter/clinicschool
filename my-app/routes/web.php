<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\ClinicVisitController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;

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
    
    // Resource routes
    Route::resource('students', StudentController::class)->only(['index','create','store','edit','update','destroy']);
    Route::resource('medicines', MedicineController::class)->only(['index','create','store','edit','update','destroy']);
    Route::resource('visits', ClinicVisitController::class)->only(['index','create','store','edit','update','destroy']);
    Route::resource('staff', StaffController::class)->only(['index','create','store','edit','update','destroy']);
    Route::resource('reports', ReportController::class)->only(['index','create','store','edit','update','destroy']);
    Route::resource('settings', SettingController::class)->only(['index','create','store','edit','update','destroy']);

    // Form routes (legacy)
    // Keep legacy form routes reachable for now (optional)
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
