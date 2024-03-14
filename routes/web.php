<?php

use App\Http\Controllers\FeedScheduleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\UserController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('dashboard')->middleware('auth');
    Route::get('jadwalMinum', [FeedScheduleController::class, 'drinkSchedulePage'])->name('landing.jadwalMinum');
    Route::get('jadwalMakan', [FeedScheduleController::class, 'feedSchedulePage'])->name('landing.jadwalMakan');
    Route::post('jadwalMakan', [FeedScheduleController::class, 'store'])->name('landing.jadwalMakan');


    Route::get('lokasi_hewan', [PetController::class, 'location'])->name('pet.location');

    Route::get('logout', [UserController::class, 'logout'])->name('logout');

    Route::get('edit_user', [UserController::class, 'editPage'])->name('user.editPage');
});

Route::middleware(['guest'])->group(function () {
    Route::get('register', [UserController::class, 'registerPage'])->name('register');
    Route::post('register', [UserController::class, 'register'])->name('register');
    Route::get('login', [UserController::class, 'loginPage'])->name('login');
    Route::post('login', [UserController::class, 'login'])->name('login');
});

Route::resource('/pet', PetController::class)->middleware('auth');
