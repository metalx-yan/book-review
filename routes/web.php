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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/q/{slug}', 'HomeController@q')->name('q');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::delete('/home/{id}', 'HomeController@destroy')->name('destroy')->middleware('auth');

Route::resource('/answer', 'AnswerController');

Route::resource('/question', 'QuestionsController');

Route::get('/', 'HomeController@root')->name('sites.root');
