<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {

  Route::get('/tweets', 'TweetController@index')->name('home');
  Route::post('/tweets', 'TweetController@store');
  Route::post('/profiles/{user:username}/follow', 'FollowsController@store')->name('follow');
  Route::get('/profiles/{user:username}/edit', 'ProfilesController@edit')->name('edit');
  Route::patch('/profiles/{user:username}', 'ProfilesController@update')->name('update');
  Route::get('/explore', 'ExploreController@index')->name('explore');
});

Route::get('/profiles/{user:username}', 'ProfilesController@show')->name('profile');
