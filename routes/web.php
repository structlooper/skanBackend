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
Route::group(['middleware' => ['auth','is_admin']], function (){

    route::get('adminDashboard','adminController@index');
    route::get('adminProifile','adminController@adminProifile');
    route::get('timeline','adminController@timeline');
    route::get('widget_chart','adminController@widget_chart');
    route::get('widget_data','adminController@widget_data');
    route::get('chat','adminController@chat');

});