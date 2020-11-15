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



Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

	// Content Module Routes
	Route::get('/guide/flowchart/{flowchart_id}/{guide_id}','ContentController@flowChart')->name('user.flowchart');
	Route::get('/guide/pdf/{id}','ContentController@createPDF')->name('selfdiagnosis.pdf.export');
	Route::get('/guide/complete/{id}','ContentController@completedGuide')->name('user.complete.guide');
	Route::get('/guide/search','ContentController@search')->name('user.selfdiagnosis.search');
	Route::resource('/guide', 'ContentController', [
	    'names' => [
	        'index' => 'user.selfdiagnosis.list',
	        'show' => 'user.selfdiagnosis.show'
	    ]
	]);

});
Route::get('/{url_slug}','PagepreviewController@pagepreview')->name('cms.pagepreview');
