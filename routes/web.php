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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/categories', 'CategoryController');

Route::resource('/games', 'GameController');

Route::resource('/evaluations', 'EvaluationController');

Route::get('/evaluations/create/{game}', 'EvaluationController@create')->name('evaluations.create');

Route::get('/evaluations/{evaluation}/edit/{game}', 'EvaluationController@edit')->name('evaluations.edit');

Route::get('/games/categories/{game}', 'GameController@editCategories')->name('games.editCategories');

Route::put('/games/categories/{game}', 'GameController@updateCategories')->name('games.updateCategories');