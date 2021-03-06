<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/movies/create', 'MovieController@create');
});

Route::get('/', ['as' => 'home', function () {
    return redirect(route('movies.home'));
}]);

Route::get('/home', ['as' => 'home', function () {
    return redirect(route('movies.home'));
}]);

Route::get('/form', ['as' => 'form', function (){
    return redirect(route('movies.form'));
}]);

require_once "core/movies.php";
