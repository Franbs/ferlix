<?php

use App\Http\Controllers\MovieController;
use App\Http\Resources\MovieCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserCollection;
use App\Models\Movie;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    return new UserCollection(User::all());
});

Route::get('/billboard', function () {
    return new MovieCollection(Movie::all());
});

Route::post('/movie', [MovieController::class, 'store']);

Route::get('/stream/{id}', [MovieController::class, 'viewWithId']);

Route::put('/updateMovie', [MovieController::class, 'updateMovie']);

Route::get('/movieDel/{id}', [MovieController::class, 'deleteMovie']);