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
    route::get('changePassword','AdminController@resetPass');
    route::put('changing','AdminController@changing');
    route::get('category',"ValuesController@category");
    /**
     * store data in database after collection from Values modal
     * by structlooper
     * 27/02/2020
     */
    route::post('addingValues',"ValuesController@addingValues");

    /**
     * specific entery delting after storing
     * by structlooper
     * 
     */
    route::get('delete/{id}','ValuesController@deleting');
    route::get('data/{id}','ValuesController@showData');
    route::post('dataUpdate/{id}','ValuesController@updateValues');

    /**
     * Data Manuplation for Bannner
     * by structlooper
     */
    Route::get('insertBanner','BannerDataController@view');
    Route::post('insertion','BannerDataController@store')->name('InsertionBannnerData');
    Route::get('showAll','BannerDataController@showAll')->name('showAll');
    Route::get('showAll/{id}','BannerDataController@updateView');
    Route::put('showAll/updationData/{id}','BannerDataController@updationData');
    Route::get('deleteSlide/{id}','BannerDataController@delete');

    /**
     * about urls MOD
     */
    Route::get('aboutData','AboutController@showData');
    Route::get('updateAboutData/{id}','AboutController@updateAboutData')->name('updateAboutData');
    Route::put('updateAboutData/updationData/{id}','AboutController@updationData');
});