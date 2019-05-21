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

Route::get('/', function () {
    return view('shared.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin','AdminController');
Route::get('muser','AdminController@muser')->name('muser');
Route::resource('user','UserDetailController');
Route::get('jlist','AdminController@jlist')->name('jlist');
Route::get('/','AdminController@carikerja');
Route::get('user','AdminController@lamarkerja');
Route::get('profile','UserDetailController@editprofile')->name('editprofile');
Route::get('admin','UserDetailController@showcv');