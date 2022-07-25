<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'register_view'])->name('register_view');
    Route::post('/register/store', [AuthController::class, 'register'])->name('register');
    Route::get('/login', [AuthController::class, 'login_view'])->name('login_view');
    Route::post('/login/store', [AuthController::class, 'login'])->name('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [AuthController::class, 'home'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::resource("products", ProductController::class);

