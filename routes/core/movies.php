<?php

Route::prefix('movies')->group(function () {
    Route::get('/', ['as' => 'movies.home', function () {
        return View('movies.home');
    }]);

    Route::get('/{id}', ['as' => 'movies.show', function ($id) {
        return View('movies.show');
    }])->where('id', '[0-9]+');

    Route::get('/form', ['as' => 'movies.form', function () {
        return View('movies.form');
    }]);

    // Route::post('/form', ['as' => 'movies.postForm', 'uses' => 'OfferController@postForm']);
});