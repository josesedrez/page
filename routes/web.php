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

use App\Evaluation;
use App\Game;

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/games/list', 'GameController@list')->name('games.list');

Route::get('/evaluations/list', 'EvaluationController@list')->name('evaluations.list');

Route::get('/profile', 'ProfileController@index')->middleware('auth')->name('profile');

Route::resource('/categories', 'CategoryController');

Route::resource('/games', 'GameController');

Route::resource('/evaluations', 'EvaluationController');

Route::get('/evaluations/create/{game}', 'EvaluationController@create')->name('evaluations.create');

Route::get('/evaluations/{evaluation}/edit/{game}', 'EvaluationController@edit')->name('evaluations.edit');

Route::get('/games/categories/{game}', 'GameController@editCategories')->middleware('auth')->name('games.editCategories');

Route::put('/games/categories/{game}', 'GameController@updateCategories')->name('games.updateCategories');


