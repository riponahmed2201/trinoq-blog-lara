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

// Route::get('/', function () {
//     return view('welcome');
// });

//Frontent

 Route::get('/','WebController@index')->name('home');
 Route::get('/about','WebController@about')->name('about');
 Route::get('/contact','WebController@showcontact')->name('contact');
 Route::post('/contact/insert','WebController@insertContactData')->name('insertContactData');



//Admin login process
Route::get('/login', [
	'uses'		=> 'LoginController@index',
	'as'		=> 'login'
]);

Route::post('/checklogin', [
	'uses'		=> 'LoginController@checklogin',
	'as'		=> 'checklogin'
]);

Route::get('/logout', [
	'uses'		=> 'LoginController@logout',
	'as'		=> 'logout'
]);

// START ADMIN PAGE 
Route::get('/dashboard', [
	'uses'		=> 'AdminController@index',
	'as'		=> 'dashboard'
]);

Route::get('/add-category', [
	'uses'		=> 'AdminController@add_category',
	'as'		=> 'add-category'
]);
Route::post('/save-category', [
	'uses'		=> 'AdminController@save_category',
	'as'		=> 'save-category'
]);
Route::get('/delete-category/{id}', [
	'uses'		=> 'AdminController@delete_category',
	'as'		=> 'delete-category'
]);

Route::get('/edit-category/{id}', [
	'uses'		=> 'AdminController@edit_category',
	'as'		=> 'edit-category'
]);

Route::get('/manage-category', [
	'uses'		=> 'AdminController@manage_category',
	'as'		=> 'manage-category'
]);
Route::get('/add-post', [
	'uses'		=> 'AdminController@add_post',
	'as'		=> 'add-post'
]);
Route::get('/manage-post', [
	'uses'		=> 'AdminController@manage_post',
	'as'		=> 'manage-post'
]);
