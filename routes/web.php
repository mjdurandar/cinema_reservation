<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('/create_movie', [App\Http\Controllers\HomeController::class, 'create_movie']);
Route::get('/table', [App\Http\Controllers\HomeController::class, 'table']);
Route::post('/movie/store', [App\Http\Controllers\HomeController::class, 'store']);
Route::get('/movie/destroy/{movie}', [App\Http\Controllers\HomeController::class, 'destroy']);


// Route::get('/hello', function()
// {
//     return response('<h1>Hello World</h1>');
// });


