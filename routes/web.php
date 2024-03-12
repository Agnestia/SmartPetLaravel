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


Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('jadwalMinum', [FeedScheduleController::class, 'jadwalMinum'])->name('landing.jadwalMinum');
Route::get('jadwalMakan', [FeedScheduleController::class, 'jadwalMakan'])->name('landing.jadwalMakan');

Route::get('edit_hewan', [PetController::class, 'show'])->name('landing.edit_hewan');
Route::get('lokasi_hewan', [PetController::class, 'location'])->name('landing.lokasi_hewan');

Route::get('register', [UserController::class, 'registerPage'])->name('landing.register');
Route::get('login', [UserController::class, 'loginPage'])->name('landing.login');
Route::get('edit_user', [UserController::class, 'editPage'])->name('landing.edit_user');
