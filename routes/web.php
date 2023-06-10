<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\BinController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect(route('home'));
})->middleware(['auth']);

// login
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login.store')->middleware('guest');

// register
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'registerStore'])->name('register.store')->middleware('guest');

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// dashboard
Route::get('/home', [DashboardController::class, 'index'])->name('home')->middleware('auth');

// Application
Route::get('/application', [ApplicationController::class, 'index'])->name('application')->middleware('auth');
// Application - Create
Route::get('/application/create', [ApplicationController::class, 'create'])->name('application.create')->middleware('auth');
// Application - Destroy
// Route::delete('/application/{application}/destroy', [ApplicationController::class, 'destroy'])->name('application.destroy')->middleware('auth');
// Application - Show
Route::get('/application/{application_id}', [ApplicationController::class, 'show'])->name('application.view')->middleware('auth');

// BIN
Route::get('/bin', [BinController::class, 'index'])->name('bin')->middleware('auth');
// BIN - Create
Route::get('/bin/create', [BinController::class, 'create'])->name('bin.create')->middleware('auth');