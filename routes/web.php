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

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Auth verified urls
 * created by structlooper
 * 25/02/2020
 */
Route::group(['middleware' => ['auth','is_admin']], function (){

    route::get('adminDashboard','AdminController@index');
    route::get('adminProifile','AdminController@adminProifile');
    route::get('timeline','AdminController@timeline');
    route::get('widget_chart','AdminController@widget_chart');
    route::get('widget_data','AdminController@widget_data');
    // route::get('chat','AdminController@chat');
    route::get('changePassword','AdminController@resetPass');
    route::put('changing','AdminController@changing');
});