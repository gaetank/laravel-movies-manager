<?php

use App\Movie;

Route::prefix('movies')->group(function () {
    Route::get('/', ['as' => 'movies.home', function () {
        $movies = Movie::all();
        
        return View('movies.home')->with([
            'movies' => $movies
        ]);
    }]);

    Route::get('/{id}', ['as' => 'movies.show', function ($id) {
        $movie = Movie::find($id);
        return View('movies.show')->with(['movie' => $movie]);
    }])->where('id', '[0-9]+');

    Route::get('/form', ['as' => 'movies.form', function () {
        return View('movies.form');
    }]);

    Route::post('/form', ['as' => 'movies.postform', 'uses' => 'MovieController@store']);
});