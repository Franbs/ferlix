<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\ViewServiceProvider;

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

/* # */
Route::get('/', function() {
    return view("home");
});

Route::get('/billboard', 'App\Http\Controllers\MovieController@list');

Route::get('/bilboard?filter="{filter}"', function($filter) {
    return view("billboard", compact($filter));
});
Route::get('/bilboard?search="{search}"', function($search) {
    return view("bilboard", compact($search));    
});
Route::get('/login', function() {
    return view("login-form");
});
Route::get('/login/loading', function() {
    return view("login-form");
});
Route::get('/register', function() {
    return view("register-form");
});
Route::get('/register/loading', function() {
    return view("register-form");
});

/* USUARIO */

Route::get('/payment', function() {
    return view("user.payment-form");
});
Route::get('/payment/loading', function() {
    return view("user.payment-form");
});
Route::get('/user', function() {
    return view("user.user-form");
});
Route::get('/user/loading', function() {
    return view("user.user-form");
});
Route::get('/stream', function() {
    return view("user.stream");
});
Route::get('/stream/fav', function() {
    return view("user.stream");
});
Route::get('/stream/next-episode', function() {
    return view("user.stream");
});
Route::get('/favorites', function() {
    return view("user.favorites");
});
Route::get('/favorites/fav', function() {
    return view("user.favorites");
});

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