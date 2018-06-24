<?php

Route::group(['middleware' => 'web', 'prefix' => 'tools', 'namespace' => 'Modules\Tools\Http\Controllers'], function()
{
    Route::get('/', 'ToolsController@index');
});
