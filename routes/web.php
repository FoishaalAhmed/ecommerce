<?php

Route::group(['middleware' => ['auth']], function () {

    //Route::get('/home', 'HomeController@index')->name('home');
    /** profile route start **/
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::post('/profile', 'ProfileController@photo')->name('profile');
    Route::post('/password', 'ProfileController@password')->name('password.change');
    Route::post('/profile-update', 'ProfileController@update')->name('profile.update');
    /** profile route end **/


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'HomeController@index');

    Route::get('/about', 'AboutController@index')->name('about');

    Route::group(['prefix' => '/user', 'middleware' => 'auth'], function () {

        Route::get('/dashboard', 'DashboardController@index')->name('user.dashboard');
    });

    Route::get('/{slug}', 'AboutController@pages')->name('pages');
});
