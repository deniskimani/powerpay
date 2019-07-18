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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	

	//Route::post('users/{status}/approve', ['as' => 'status.approve', 'uses' => 'LoanersController@approve']); 
	Route::get('/users/{status}', ['as' => 'status.show', 'uses' => 'LoanersController@show']);
	

	Route::resource('/users', 'LoanersController');
	Route::resource('/product', 'ProductController');
	Route::resource('/cleared', 'ClearedController');
	Route::resource('/paid', 'PaidController');

	//Route::get('/customers','LoanersController@index')->name('customers.index');

	//Route::get('/','ApprovedController@index')->name('Notifications.index');

	Route::get('/approved','ApprovedController@index')->name('approved.index');
	

	Route::get('/declined','DeclinedController@index')->name('declined.index');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');

	Route::any('/search',function(){
		$q = Input::get ( 'q' );
		$user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->orWhere('id_number','LIKE','%'.$q.'%')->orWhere('msisdn','LIKE','%'.$q.'%')->get();
		if(count($user) > 0)
			return view('users.search')->withDetails($user)->withQuery ( $q );
		else return view ('users.search')->withMessage('No Details found. Try to search again !');
	});

});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

