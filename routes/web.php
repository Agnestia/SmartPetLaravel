<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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



Route::get('register', [LandingController::class, 'register'])->name('landing.register');

Route::get('login', [LandingController::class, 'login'])->name('landing.login');

Route::get('edit_hewan', [LandingController::class, 'edit_hewan'])->name('landing.edit_hewan');

Route::get('edit_user', [LandingController::class, 'edit_user'])->name('landing.edit_user');

Route::get('jadwalMinum', [LandingController::class, 'jadwalMinum'])->name('landing.jadwalMinum');

Route::get('jadwalMakan', [LandingController::class, 'jadwalMakan'])->name('landing.jadwalMakan');

Route::get('lokasi_hewan', [LandingController::class, 'lokasi_hewan'])->name('landing.lokasi_hewan');

Route::get('/', [LandingController::class, 'index'])->name('landing.index');