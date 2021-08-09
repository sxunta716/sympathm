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
Route::get('/artist/create', 'ArtistController@create');
Route::post('/artist/store', 'ArtistController@store');
Route::get('/artist/edit/{artist_id}', 'ArtistController@edit');
Route::post('/song/add', 'SongController@add');

// シェア画面
Route::get('/recommend/{id}', 'ShareController@index');
Route::get('/recommend/{id}/result', 'ShareController@result');