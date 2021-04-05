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
Route::post('/send-product-review', 'ProductReviewController@store')->name('reviews.store');

Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'HomeController@index');
    Route::get('/about', 'AboutController@index')->name('about');
    Route::get('/contact', 'ContactController@index')->name('front.contact');
    Route::post('/query', 'ContactController@query')->name('query');
    Route::get('/products/{category_id}/{category_name}', 'ProductController@products')->name('front.products');
    Route::get('/product/{slug}', 'ProductController@product')->name('front.product');

    Route::get('/carts', 'CartController@index')->name('carts');
    Route::post('/add-to-cart', 'CartController@store')->name('carts.store');
    Route::post('/update-cart', 'CartController@update')->name('carts.update');
    Route::post('/delete-cart', 'CartController@delete')->name('carts.delete');

    Route::group(['prefix' => '/user', 'middleware' => 'auth'], function () {

        Route::get('/dashboard', 'DashboardController@index')->name('user.dashboard');
    });

    Route::get('/{slug}', 'AboutController@pages')->name('pages');
});
