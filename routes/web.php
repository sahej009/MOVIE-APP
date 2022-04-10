<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\RealisateurController;
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

Route::get('/test', function () {
    return view('test');
});

// Route::get('/movie/index', [MovieController::class, 'index']);
// Route::get('/movie/show', [MovieController::class, 'show']);

Route::resource('/movie', MovieController::class);
Route::resource('/realisateur', RealisateurController::class);

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
