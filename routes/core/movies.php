<?php

Route::prefix('movies')->group(function () {
    Route::get('/', ['as' => 'movies.home', function () {
        $faker = Faker\Factory::create('fr_FR');
        $movies = [];
        for ($i = 0; $i < 10; $i++){
            $movies[] = (object)[
                'title' => $faker->sentence(3),
                'description' => $faker->realText($faker->numberBetween(50, 100)),
                'imageUrl' => $faker->imageUrl(700, 400),
                'price' => $faker->biasedNumberBetween(2.50,11)
            ];
        }
        return View('movies.home')->with([
            'movies' => $movies
        ]);
    }]);

    Route::get('/{id}', ['as' => 'movies.show', function ($id) {
        $faker = Faker\Factory::create('fr_FR');
        $movie = (object)[
            'title' => $faker->sentence(3),
            'description' => $faker->realText($faker->numberBetween(500, 1000)),
            'imageUrl' => $faker->imageUrl(1000, 400),
            'price' => $faker->biasedNumberBetween(2.50,11)
        ];
        return View('movies.show')->with(['movie' => $movie]);
    }])->where('id', '[0-9]+');

    Route::get('/form', ['as' => 'movies.form', function () {
        return View('movies.form');
    }]);

    // Route::post('/form', ['as' => 'movies.postForm', 'uses' => 'OfferController@postForm']);
});