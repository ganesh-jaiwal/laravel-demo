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

// Route::get('/projects', 'ProjectsController@index');

// Route::post('/projects', 'ProjectsController@store');

// Route::get('/projects/create', 'ProjectsController@create');

Route::resource('projects', 'ProjectsController');

Route::patch('/tasks/{task}', 'ProjectTaskController@update');

Route::post('/projects/{project}/tasks', 'ProjectTaskController@store');

Route::get('/vue-demo', 'PageController@vueDemo');

Route::get('/vue-with-laravel', 'PageController@vueWithLaravel');

Route::get('/', 'PageController@home');

Route::get('/contact', 'PageController@contact');

Route::get('/about', 'PageController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
