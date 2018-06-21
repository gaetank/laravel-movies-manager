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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/', ['as' => 'home', function () {
    return redirect(route('movies.home'));
}]);

require_once "core/movies.php";
>>>>>>> 5a428062a620d6a9c458e1483d7795713b46a809
