<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/showLoginForm', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [AuthController::class, 'login'])->name('Login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [BookingController::class, 'Booking'])->name('Booking');
Route::post('/book-room/{id}', [BookingController::class, 'createBooking'])->name('createBooking');

Route::middleware(['check.auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'AdminIndex'])->name('AdminIndex');
    Route::post('/admin/{id}/approve', [AdminController::class, 'approve'])->name('approve');
    Route::delete('/admin/booking/{bookingId}', [AdminController::class, 'deleteBooking'])->name('deleteBooking');
});
