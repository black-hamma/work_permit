<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HazardController;
use App\Http\Controllers\JobRequirementController;
use App\Http\Controllers\LocationController;
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

Route::get('/', function () {
    return view('login');
})->name('login');



Route::get('permits', [PermitController::class, 'index'])->name('permits.index');
Route::get('permits/create', [PermitController::class, 'create'])->name('permits.create');
Route::post('permits', [PermitController::class, 'store'])->name('permits.store');

Route::get('/user', [UserController::class, 'index'])->name('users.index');
Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user', [UserController::class, 'store'])->name('users.store');

Route::any('/location', [LocationController::class, 'index'])->name('locations.index');
Route::post('/location/{location}', [LocationController::class, 'update'])->name('locations.update');
Route::delete('/location/{location}', [LocationController::class, 'destroy'])->name('locations.destroy');

Route::any('/department', [DepartmentController::class, 'index'])->name('departments.index');
Route::post('/department/{department}', [DepartmentController::class, 'update'])->name('departments.update');
Route::delete('/department/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');

Route::any('/hazards', [HazardController::class, 'index'])->name('hazards.index');
Route::post('/hazards/{hazard}', [HazardController::class, 'update'])->name('hazards.update');
Route::delete('/hazards/{hazard}', [HazardController::class, 'destroy'])->name('hazards.destroy');

Route::any('/job-requirements', [JobRequirementController::class, 'index'])->name('job-requirements.index');
Route::post('/job-requirements/{job_requirement}', [JobRequirementController::class, 'update'])->name('job-requirements.update');
Route::delete('/job-requirements/{job_requirement}', [JobRequirementController::class, 'destroy'])->name('job-requirements.destroy');

Route::any('/ppe-requirements', [PpeRequirementController::class, 'index'])->name('ppe-requirements.index');
Route::post('/ppe-requirements/{ppe_requirement}', [PpeRequirementController::class, 'update'])->name('ppe-requirements.update');
Route::delete('/ppe-requirements/{ppe_requirement}', [PpeRequirementController::class, 'destroy'])->name('ppe-requirements.destroy');

Route::any('/precautionary-measures', [PrecautionaryMeasureController::class, 'index'])->name('precautionary-measures.index');
Route::post('/precautionary-measures/{precautionary_measures}', [PrecautionaryMeasureController::class, 'update'])->name('precautionary-measures.update');
Route::delete('/precautionary-measures/{precautionary_measures}', [PrecautionaryMeasureController::class, 'destroy'])->name('precautionary-measures.destroy');


