<?php
Route::group(['prefix' => '/admin', 'namespace' => 'Admin', 'middleware' => ['admin', 'auth']], function () { 
    Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');

    Route::resources([

        'users'          => 'UserController',
        'colors'         => 'ColorController',
        'sizes'          => 'SizeController',
    ]);
});