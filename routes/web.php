<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfiluserController;
use App\Http\Controllers\ProfiladminController;
use App\Http\Controllers\LaporancabangController;
use App\Http\Controllers\RegisterController;

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
//login form
Route::GET('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'proseslogin'])->name('proseslogin');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//HOME DASHBOARD
Route::get('home', [HomeController::class, 'home'])->name('home');

//ADMIN
Route::get('admin', [AdminController::class, 'admin'])->name('admin');
Route::get('profiladmin', [ProfiladminController::class, 'profiladmin'])->name('profiladmin');


//CABANG
Route::get('cabang', [CabangController::class, 'cabang'])->name('cabang');

//LAPORAN
Route::get('laporan', [LaporanController::class, 'laporan'])->name('laporan');
Route::get('laporancabang', [LaporancabangController::class, 'laporancabang'])->name('laporancabang');

//PROFILUSER 
Route::get('profiluser', [ProfiluserController::class, 'profiluser'])->name('profiluser');

// muncullin data laporan
Route::resource('/posts', \App\Http\Controllers\LaporancabangController::class);


