<?php
Route::group(['prefix' => '/admin', 'namespace' => 'Admin', 'middleware' => ['admin', 'auth']], function () { 

    Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::put('/contact/{id}/update', 'ContactController@update')->name('contact.update');
    Route::get('/queries', 'QueryController@index')->name('queries.index');
    Route::delete('/queries/destroy/{id}', 'QueryController@destroy')->name('queries.destroy');

    Route::post('/products/delete', 'ProductController@delete')->name('delete.product.photo');

    Route::resources([

        'users'          => 'UserController',
        'colors'         => 'ColorController',
        'sizes'          => 'SizeController',
        'categories'     => 'CategoryController',
        'pages'          => 'PageController',
        'teams'          => 'TeamController',
        'faqs'           => 'FaqController',
        'products'       => 'ProductController',
    ]);
});