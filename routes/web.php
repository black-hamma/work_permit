<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HazardIdentificationController;
use App\Http\Controllers\JobRequirementController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PermitController;
use App\Http\Controllers\PpeRequirementController;
use App\Http\Controllers\PrecautionaryMeasureController;
use App\Http\Controllers\UserController;
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

// Authentication Routes

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    // Admin Routes
    Route::middleware(['is_admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/users', [AdminController::class, 'manageUsers'])->name('users.index');
        Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    });


    // User Routes
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [UserController::class, 'profile'])->name('profile');
        Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('update-profile');
    });


    Route::get('permits', [PermitController::class, 'index'])->name('permits.index');
    Route::get('permits/create', [PermitController::class, 'create'])->name('permits.create');
    Route::post('permits', [PermitController::class, 'store'])->name('permits.store');

    Route::get('/user', [UserController::class, 'index'])->name('users.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/user', [UserController::class, 'store'])->name('users.store');
    Route::get('/user/{user}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/user/{user}', [UserController::class, 'update']);
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{user}/generate-pdf', [UserController::class, 'generatePdf'])->name('users.generate-pdf');

    Route::get('password/change', [PasswordController::class, 'index'])->name('password.change');
    Route::post('password/change', [PasswordController::class, 'update'])->name('password.update');

    Route::any('/location', [LocationController::class, 'index'])->name('locations.index');
    Route::post('/location/{location}', [LocationController::class, 'update'])->name('locations.update');
    Route::delete('/location/{location}', [LocationController::class, 'destroy'])->name('locations.destroy');

    Route::any('/department', [DepartmentController::class, 'index'])->name('departments.index');
    Route::post('/department/{department}', [DepartmentController::class, 'update'])->name('departments.update');
    Route::delete('/department/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');

    Route::any('/hazard-identifications', [HazardIdentificationController::class, 'index'])->name('hazard_identifications.index');
    Route::post('/hazard-identifications/{hazard_identification}', [HazardIdentificationController::class, 'update'])->name('hazard_identifications.update');
    Route::delete('/hazard-identifications/{hazard_identification}', [HazardIdentificationController::class, 'destroy'])->name('hazard_identifications.destroy');

    Route::any('/job-requirements', [JobRequirementController::class, 'index'])->name('job-requirements.index');
    Route::post('/job-requirements/{job_requirement}', [JobRequirementController::class, 'update'])->name('job-requirements.update');
    Route::delete('/job-requirements/{job_requirement}', [JobRequirementController::class, 'destroy'])->name('job-requirements.destroy');

    Route::any('/ppe-requirements', [PpeRequirementController::class, 'index'])->name('ppe-requirements.index');
    Route::post('/ppe-requirements/{ppe_requirement}', [PpeRequirementController::class, 'update'])->name('ppe-requirements.update');
    Route::delete('/ppe-requirements/{ppe_requirement}', [PpeRequirementController::class, 'destroy'])->name('ppe-requirements.destroy');

    Route::any('/precautionary-measures', [PrecautionaryMeasureController::class, 'index'])->name('precautionary-measures.index');
    Route::post('/precautionary-measures/{precautionary_measures}', [PrecautionaryMeasureController::class, 'update'])->name('precautionary-measures.update');
    Route::delete('/precautionary-measures/{precautionary_measures}', [PrecautionaryMeasureController::class, 'destroy'])->name('precautionary-measures.destroy');

});




