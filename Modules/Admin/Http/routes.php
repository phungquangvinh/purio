<?php
if (check_domain(env('DOMAIN_ADMIN'))) {

    Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
    {
        Route::group(['middleware'=>'guest:web_admin'],function (){
            Route::get('/login', 'AdminController@login')->name('admin.login');
            Route::post('/login','AdminController@postLogin')->name('admin.postLogin');
        });
        Route::group(['middleware' => 'auth:web_admin'], function () {
            Route::get('/logout','AdminController@logout')->name('logout');
            Route::get('/', function (){
                return redirect('manager/index');
            });
            Route::get('/manager/index','ManagerController@index')->name('manager.index');
        });
    });
}
