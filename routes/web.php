<?php

use App\Http\Controllers\PermitController;
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
