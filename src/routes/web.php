<?php

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

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\QuizMiddleware;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('quiz', 'QuizController@list');
Route::get('quiz/{id}', 'QuizController@index');
    // ->middleware(QuizMiddleware::class);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin/login', 'AdminController@login');
// Route::post('/admin/login', 'AdminController@check');

Route::get('/admin', 'AdminController@index')->middleware('auth');
