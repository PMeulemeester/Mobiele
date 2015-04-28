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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

/**
 * friends
 */
Route::get('friends/{user_id}',"FriendController@friends");
Route::get('friends/sent/{user_id}',"FriendController@friendRequestsSent");
Route::get('friends/received/{user_id}',"FriendController@friendRequestsReceived");
Route::put('friends/{user_id}/{friend_id}',"FriendController@addFriend");
Route::delete('friends/{user_id}/{friend_id}',"FriendController@deleteFriend");

/**
 * temporary for testing
 */
Route::get('friends/add/{user_id}/{friend_id}',"FriendController@addFriend");
Route::get('friends/del/{user_id}/{friend_id}',"FriendController@deleteFriend");

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::group(array('middleware'=>'auth'),function() {
	Route::get('getLicensePlates','HomeController@getLicPlates');
	Route::post('bookSpot','HomeController@bookSpot');
	Route::get('bookings','HomeController@bookings');
});
