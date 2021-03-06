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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/users/list', 'UserController@list')->name('users.list');

Route::get('/games/list', 'GameController@list')->name('games.list');

Route::get('/evaluations/list/{user?}', 'EvaluationController@list')->name('evaluations.list');

Route::get('/profile', 'UserController@profile')->middleware('auth')->name('users.profile');

Route::resource('/categories', 'CategoryController');

Route::resource('/users', 'UserController');

Route::resource('/games', 'GameController');

Route::resource('/evaluations', 'EvaluationController');

Route::get('/evaluations/create/{game}', 'EvaluationController@create')->middleware('auth')->name('evaluations.create');

Route::get('/evaluations/{evaluation}/edit/{game}', 'EvaluationController@edit')->middleware('auth')->name('evaluations.edit');

Route::get('/games/categories/{game}', 'GameController@editCategories')->middleware('auth')->name('games.editCategories');

Route::put('/games/categories/{game}', 'GameController@updateCategories')->middleware('auth')->name('games.updateCategories');

Route::get('/users/password/{user}', 'UserController@changePassword')->middleware('auth')->name('users.password');

Route::put('/users/password/{user}', 'UserController@updatePassword')->middleware('auth')->name('users.updatePassword');
