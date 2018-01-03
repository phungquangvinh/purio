<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Display\Http\Controllers'], function () {

	Route::get('/', 'DisplayController@index')->name('index');
	Route::group(['middleware' => 'auth:web_display'], function () {
	});
    Route::get('about', function(){
        return view('display::about');
    });
});

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
	Route::group(['middleware'=>'guest:web_admin'],function (){
		Route::get('/login', 'AdminController@login')->name('admin.login');
		Route::post('/login','AdminController@postLogin')->name('admin.postLogin');
	});
	Route::group(['middleware' => 'auth:web_admin'], function () {
		Route::get('/logout','AdminController@logout')->name('logout');
		Route::get('/', function (){
			return redirect('admin/manager/index');
		});
		Route::get('/manager/index','ManagerController@index')->name('manager.index');
	});
});