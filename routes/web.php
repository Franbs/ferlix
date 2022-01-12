<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MovieController, UserController};

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

Route::get('/', function() {
    return view("home");
});

Route::get('/billboard', [MovieController::class, 'billboard'])->name('billboard');

Route::get('/search', [MovieController::class, 'billboard'])->name('search');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/login', [UserController::class, 'start'])->name('login.start');

Route::get('/logout', [UserController::class, 'destroy'])->name('logout');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/register', [UserController::class, 'store'])->name('register.store');