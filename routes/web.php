<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'auth']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::post("/logout", [LoginController::class, "logout"]);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource('/dashboard/books', BookController::class);
Route::resource('/dashboard/bookings', BookingController::class);
Route::post('/dashboard/bookings', [BookingController::class, 'store']);

// profile
Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('user-profile');
Route::get('/dashboard/profile/edit', [ProfileController::class, 'edit'])->name('user-profile-edit');
Route::post('/dashboard/profile/update', [ProfileController::class, 'update'])->name('user-profile-update');

