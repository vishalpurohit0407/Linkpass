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

Route::get('/creator-register', 'Auth\RegisterController@creatorRegister')->name('creator-register');
Route::get('/creator-login', 'Auth\LoginController@creatorLogin')->name('creator-login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories', 'HomeController@getCategories')->name('categories');
Route::get('/categories/{id}', 'HomeController@getContentsByCategory')->name('categories.get-items');
Route::get('/latest', 'HomeController@getLatestResults')->name('latest');
Route::get('/trending', 'HomeController@getTrendingResults')->name('trending');
Route::get('/results', 'HomeController@getResults')->name('results');
Route::get('/results/{id}', 'HomeController@getContentDetails')->name('result.get-details');

Route::post('/content/save-rating','ContentController@saveRating')->name('user.content.save-rating');
Route::get('/content/get-ratings','ContentController@getRatings')->name('user.content.get-ratings');
Route::post('/content/save-action','ContentController@saveAction')->name('user.content.save-action');

//  Verify Account Name
Route::post('validate-account-name', ['as' => 'user.validate-account-name', 'uses' => 'ProfileController@validateAccountName']);

Route::group(['middleware' => 'auth'], function () {

	// Profile Routes
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);

	// Change Password Routes
	Route::get('change-password', ['as' => 'change-password', 'uses' => 'ProfileController@changePassword']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

	// Content Module Routes
	Route::get('/content/search','ContentController@search')->name('user.content.search');
	Route::post('/content/delete','ContentController@deleteContent')->name('user.content.delete');
	Route::post('/content/get-details','ContentController@getContentDetails')->name('user.content.get-details');
	Route::resource('/content', 'ContentController', [
	    'names' => [
			'index'   => 'user.content.list',
	        'create'  => 'user.content.create',
	        'store'   => 'user.content.store',
	        'edit'    => 'user.content.edit',
	        'update'  => 'user.content.update',
	        'destroy' => 'user.content.destroy',
	        'show'    => 'user.content.show'
	    ]
	]);

	Route::post('/content/img-upload','ContentController@img_upload')->name('user.content.upload');
	Route::post('/content/main-img-upload/{id}','ContentController@mainImgUpload')->name('user.content.mainupload');
	Route::post('/content/remove/img-upload','ContentController@removeImage')->name('user.content.remove.image');

	// Social Accounts
	Route::post('/social-account/list/data','SocialAccountController@listdata')->name('user.social-account.listdata');
	Route::post('/social-account/delete','SocialAccountController@deleteSocialAccount')->name('user.social-account.delete');
	Route::resource('/social-account', 'SocialAccountController', [
	    'names' => [
	        'index'   => 'user.social-account.list',
	        'create'  => 'user.social-account.create',
	        'store'   => 'user.social-account.store',
	        'edit'    => 'user.social-account.edit',
	        'update'  => 'user.social-account.update',
	        'destroy' => 'user.social-account.destroy'
	    ]
	]);

	// User Account
	Route::get('account','UserAccountController@getLoggedInUserAccount')->name('user.account');
	Route::get('account/{id}/contents','UserAccountController@getContentsByAccountId')->name('user.account.contents');

	// User Preferences
	Route::post('/user/save-user-interest','ProfileController@saveUserInterest')->name('user.save-user-interest');
	Route::post('/user/set-user-type','ProfileController@setUserType')->name('user.set-user-type');
	Route::get('/user/get-preferences','ProfileController@getUserPreferences')->name('user.get-preferences');
	Route::post('/user/save-preferences-group','ProfileController@saveUserPreferencesGroup')->name('user.save-preferences-group');
	Route::post('/user/delete-preferences-group','ProfileController@deleteUserPreferencesGroup')->name('user.delete-preferences-group');
	Route::post('/user/set-preferences-group-status','ProfileController@setUserPreferencesGroupStatus')->name('user.set-preferences-group-status');
	Route::post('/user/save-preferences-group-tag','ProfileController@saveUserPreferencesGroupTag')->name('user.save-preferences-group-tag');

});

Route::get('/{url_slug}','PagepreviewController@pagepreview')->name('cms.pagepreview');
