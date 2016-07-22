<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PostsController@index');

Route::group(['middleware' => ['web']], function() {
    Route::resource('posts', 'PostsController');
});
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('admin', function(){
    echo "is Admin";
})->middleware('isAdmin');