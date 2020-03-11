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
Route::group(['middleware' => ['auth', 'is_admin']], function () {

    route::get('adminDashboard', 'AdminController@index')->name('adminDashboard');
    route::get('adminProifile', 'AdminController@adminProifile')->name('adminProifile');
    route::get('timeline', 'AdminController@timeline')->name('timeline');
    route::get('changePassword', 'AdminController@resetPass')->name('changePassword');
    route::put('changing', 'AdminController@changing')->name('changing');
    route::get('category', "ValuesController@category")->name('category');

    /**
     * SubAdmin Routes
     * by structlooper
     */
    Route::get('showAllAdmins', 'AdminController@showAllSAdmins')->name('showAlls-admin');
    Route::get('newAdmin', 'AdminController@registrtionPage')->name('newAdmin');
    Route::post('newAdminReg', 'AdminController@registrtion')->name('newAdminReg');
    route::get('updateDetailsPage/{id}', 'AdminController@updateDetailsPage');
    Route::put('updateDetailsPage/updationUserData/{id}', 'AdminController@updationUserData');
    Route::put('updateDetailsPage/updateUserPassword/{id}', 'AdminController@updateUserPassword');

    Route::get('showAllsUsers', 'AdminController@showAllUser')->name('showAllsUsers');
    Route::get('showUserDetails/{id}', 'AdminController@UserSpecificProfile');
    Route::get('inactivate/{id}', 'AdminController@inactivateUserProfile');
    Route::get('activate/{id}', 'AdminController@activateUserProfile');
    /**
     * store data in database after collection from Values modal
     * by structlooper
     * 27/02/2020
     */
    route::post('addingValues', "ValuesController@addingValues")->name('addingValues');

    /**
     * specific entery delting after storing
     * by structlooper
     * 
     */
    route::get('delete/{id}', 'ValuesController@deleting');
    route::get('data/{id}', 'ValuesController@showData');
    route::post('dataUpdate/{id}', 'ValuesController@updateValues');

    /**
     * Data Manuplation for Bannner
     * by structlooper
     */
    Route::get('insertBanner', 'BannerDataController@view')->name('insertBanner');
    Route::post('insertion', 'BannerDataController@store')->name('InsertionBannnerData');
    Route::get('showAll', 'BannerDataController@showAll')->name('showAll');
    Route::get('showAll/{id}', 'BannerDataController@updateView');
    Route::put('showAll/updationData/{id}', 'BannerDataController@updationData');
    Route::get('deleteSlide/{id}', 'BannerDataController@delete');

    /**
     * about urls DOM
     */
    Route::get('aboutData', 'AboutController@showData')->name('aboutData');
    Route::get('updateAboutData/{id}', 'AboutController@updateAboutData')->name('updateAboutData');
    Route::put('updateAboutData/updationData/{id}', 'AboutController@updationData');

    /**
     * Terms and Condition DOM
     */
    Route::get('termsAndCondition', 'TermsAndConditionController@view')->name('termsAndCondition');
    Route::put('updationTermsData/{id}', 'TermsAndConditionController@updationTermsData');

    /**
     * privacy Policy DOM
     */
    Route::get('privacyPolicy', 'privacyPolicyController@view')->name('privacyPolicy');
    Route::put('updationPrivacyPolicy/{id}', 'privacyPolicyController@updationPrivacyData');
});
