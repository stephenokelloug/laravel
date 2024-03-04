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



//Authentication
Auth::routes();


Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function(){
 Route::get('/', 'DashboardController')->name('dashboard');

 Route::group(['prefix' => 'users', 'middleware' => ['hasRole:admin']], function(){
  Route::get('/', 'UserController@index')->name('dashboard.users');
  Route::get('/permissions/{user_id}', 'UserPermissionController@index')->name('dashboard.users.permissions');

 });


});

