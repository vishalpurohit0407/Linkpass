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

Route::get('/', 'HomeController@index');
Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/latest', 'HomeController@getLatestResults')->name('latest');
Route::get('/trending', 'HomeController@getTrendingResults')->name('trending');
Route::get('/results', 'HomeController@getResults')->name('results');
Route::get('/results/{id}', 'HomeController@getContentDetails')->name('result.get-details');

Route::group(['middleware' => 'auth'], function () {

	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

	// Content Module Routes
	Route::get('/content/pdf/{id}','ContentController@createPDF')->name('content.pdf.export');
	Route::get('/content/complete/{id}','ContentController@completedContent')->name('user.complete.content');
	Route::get('/content/search','ContentController@search')->name('user.content.search');
	Route::resource('/content', 'ContentController', [
	    'names' => [
	        'index' => 'user.content.list',
	        'show' => 'user.content.show'
	    ]
	]);

});
Route::get('/{url_slug}','PagepreviewController@pagepreview')->name('cms.pagepreview');
