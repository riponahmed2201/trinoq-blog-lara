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


// START ADMIN PAGE 

Route::get('/login','AdminLoginController@index');


Route::get('/home','AdminController@index')->name('master');
Route::get('/category/add-category','AdminController@add_category')->name('add-category');
Route::get('/category/manage-category','AdminController@manage_category')->name('manage-category');