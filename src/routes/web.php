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

use App\Http\Middleware\QuizMiddleware;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('quiz/{id}', 'QuizController@index')
    ->middleware(QuizMiddleware::class);
=======
Route::get('quiz/{id?}', 'QuizController@index');
>>>>>>> def5b4401e962b5cb05a81557fa0099a664bc808
