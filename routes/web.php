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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//必须放在最后面，因为 {slug} 会匹配所有不包含 / 的路径
Route::get('/', 'ArticlesController@index');
Route::get('{slug}', 'ArticlesController@show')->name('articles.show');
//兼容原 typecho 链接
Route::get('/archives/{slug}', function ($slug) {
    return redirect()->route('articles.show', ['slug' => $slug]);
});
