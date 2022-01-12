<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\ViewServiceProvider;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/billboard', [MovieController::class, 'list'])->name("billboard");

Route::get('/bilboard?filter="{filter}"', function($filter) {
    return view("billboard", compact($filter));
});
Route::get('/bilboard?search="{search}"', function($search) {
    return view("bilboard", compact($search));    
});

/* Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest'); */

Route::get('/register',  [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest')
                ->name("registerLoading");


Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/login', [UserController::class, 'start'])->name('login.start');

Route::get('/logout', [UserController::class, 'destroy'])->name('logout');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/register', [UserController::class, 'store'])->name('register.store');
/* Administrador */
Route::get('/user-list', function() {
    return view("user-list");
});
Route::get('/user-list/info', function() {
    return view("user-list-info");
});
Route::get('/user-list/info/block', function() {
    return view("user-list-info");
});
Route::get('/user-list/info/unblock', function() {
    return view("user-list-info");
});
Route::get('/user-list/info/allow', function() {
    return view("user-list-info");
});
Route::get('/media-list', function() {
    return view("media-list");
});
Route::get('/media-list/info', function() {
    return view("media-list-info");
});
Route::get('/media-list/info/save', function() {
    return view("media-list-info");
});
Route::get('/media-list/add', function() {
    return view("media-list-info");
});
Route::get('/media-list/discard', function() {
    return view("media-list-info");
});
require __DIR__.'/auth.php';
