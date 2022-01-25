<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\ViewServiceProvider;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\FavoritesController;

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

Route::get('/search', [MovieController::class, 'search'])->name('search');

Route::get('/favorites', [FavoritesController::class, 'index'])
    ->middleware('auth')
    ->name('favorites');

Route::get('/favorites/add/{id}', [FavoritesController::class, 'store'])
    ->middleware('auth')
    ->name('addFavorite');

Route::get('/favorites/destroy', [FavoritesController::class, 'destroy'])
    ->middleware('auth')
    ->name('destroy');

    
Route::get('/favorites/destroy/{id}', [FavoritesController::class, 'destroy'])
    ->middleware('auth')
    ->name('destroy');
    
Route::post('/stream', [MovieController::class, 'stream'])->name('stream');
Route::get('/stream', function() {
    return view("user/stream");
})->name('stream');

Route::get('/stream', function($id) {
    return redirect("/stream/" + $id);
})->middleware('auth')->name('stream');

Route::get('/stream/{id}', function($id) {
    // return redirect("/stream/" + $id);
    return view("user/stream")->with("movieID", $id);
})->middleware('auth')->name('stream');


/* Administrador */
// Route::get('/user-list', function() {
//     return view("user-list");
// });
// Route::get('/user-list/info', function() {
//     return view("user-list-info");
// });
// Route::get('/user-list/info/block', function() {
//     return view("user-list-info");
// });
// Route::get('/user-list/info/unblock', function() {
//     return view("user-list-info");
// });
// Route::get('/user-list/info/allow', function() {
//     return view("user-list-info");
// });
// Route::get('/media-list', function() {
//     return view("media-list");
// });
// Route::get('/media-list/info', function() {
//     return view("media-list-info");
// });
// Route::get('/media-list/info/save', function() {
//     return view("media-list-info");
// });
// Route::get('/media-list/add', function() {
//     return view("media-list-info");
// });
// Route::get('/media-list/discard', function() {
//     return view("media-list-info");
// });

require __DIR__.'/auth.php';
