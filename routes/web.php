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

Route::get('/','Pagescontroller@start');
Route::get('/treneri','Pagescontroller@treneri');
Route::get('/posts/{id}','Pagescontroller@showPost');
Route::get('/calendar','Pagescontroller@calendar');
Route::get('/team','Pagescontroller@team');
Route::get('/start','Pagescontroller@start');
Route::get('/club','Pagescontroller@club');
Route::get('/contacts','Pagescontroller@contacts');


Route::get('/calendar', 'EventController@index')->name('events.index');
Route::post('/calendar', 'EventController@addEvent')->name('events.add');





Route::resource('team','speletajiController');

Route::resource('posts','PostsController');

Auth::routes();


