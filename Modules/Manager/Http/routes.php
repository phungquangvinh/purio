<?php
if (check_domain(env('DOMAIN_CUSTOMER'))) {
    Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Manager\Http\Controllers'], function () {
        Route::group(['middleware' => 'guest:web_manager'], function () {
            Route::get('login', 'LoginController@login')->name('manager.login');
            Route::post('login', 'LoginController@postLogin')->name('manager.postLogin');
        });

        Route::group(['middleware' => 'auth:web_manager'], function () {
            Route::get('/', 'ManagerController@index')->name('manager.index');
        });

    });
}

