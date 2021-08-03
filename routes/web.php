<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');

// Route::get('home', 'App\Http\Controllers\HomeController@index')->name('home');



Route::get('questions', 'App\Http\Controllers\HomeController@questions')->name('questions');

Route::post('questions', 'App\Http\Controllers\PostController@savePost')->name('save');


Route::get('home', 'App\Http\Controllers\PostController@postList')->name('home');
// Route::get('dashboard', 'App\Http\Controllers\UserController@userList')->name('dashboard');


Route::get('dashboard', 'App\Http\Controllers\HomeController@index')->name('dashboard');


Route::get('dashboard', 'App\Http\Controllers\PostController@postAdmin')->name('dashboard');


Route::get('delete-user/{id}', 'App\Http\Controllers\UserController@deleteUser')->name('delete-user');
Route::get('delete-post/{id}', 'App\Http\Controllers\PostController@deletePost')->name('delete-post');

Route::post('home', 'App\Http\Controllers\ReplyController@reply')->name('home');