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
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => ['web', 'auth'],
], function () {
    Route::resource('articles', 'ArticleController');
    Route::post('upload', 'CommonController@upload');
    Route::post('uploadBlob', 'CommonController@uploadBlob');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'BlogController@index');
Route::get('/search', 'BlogController@index')->name('blogs.search');
//必须放在最后面，因为 {slug} 会匹配所有不包含 / 的路径
Route::get('{slug}', 'BlogController@show')->name('blogs.show');

//兼容原 typecho 链接
Route::get('/archives/{slug}', function ($slug) {
    return redirect()->route('blogs.show', ['slug' => $slug]);
});
