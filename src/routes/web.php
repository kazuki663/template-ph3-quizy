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

use App\Http\Controllers\QuestionController;
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
Route::post('/admin', 'AdminController@order');

Route::get('/admin/add', 'AdminController@add');
Route::post('/admin/add', 'AdminController@create');

Route::get('/admin/edit', 'AdminController@edit');
Route::post('/admin/edit', 'AdminController@update');

Route::get('/admin/del', 'AdminController@delete');
Route::post('/admin/del', 'AdminController@remove');

Route::get('/question', 'QuestionController@index');

Route::get('/question/add', 'QuestionController@add');
Route::post('/question/add', 'QuestionController@create');

Route::get('/question/del', 'QuestionController@delete');
Route::post('/question/del', 'QuestionController@remove');
