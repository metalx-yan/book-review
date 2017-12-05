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
Route::put('/hapus/{id}', 'AnswerController@hapus')->name('hapus');

Route::put('/jawaban_terbaik/{id}', 'AnswerController@jawaban_terbaik')->name('jawaban_terbaik');

Route::delete('/detach/{detach}', 'AnswerController@detach')->name('detach');

Route::delete('/attach/{attach}', 'AnswerController@attach')->name('attach');

Route::post('/rate', 'AnswerController@rate')->name('rate');

Route::post('/disrate', 'AnswerController@disrate')->name('disrate');

Auth::routes();

Route::get('/q/{slug}', 'HomeController@q')->name('q')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::delete('/home/{id}', 'HomeController@destroy')->name('destroy')->middleware('auth');

Route::resource('/answer', 'AnswerController');

Route::resource('/question', 'QuestionsController');

Route::get('/', 'HomeController@root')->name('sites.root');
