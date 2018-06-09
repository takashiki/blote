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

Route::resource('articles', 'ArticlesController');

Route::get('/archives/{id}', function ($id) {
    return redirect()->route('articles.show', ['id' => $id]);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
