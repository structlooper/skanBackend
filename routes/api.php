<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/**
 * These are the not verified routes
 * used without middleware request
 * created by structlooper
 * 25/02/20
 */
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('open', 'DataController@open');
Route::post('paymentData', 'PaymentController@PayDatas');
/**
 * DOM api URLS
 * by structlooper
 */
Route::get('slideData','BannerDataController@show');

Route::get('aboutData','AboutController@aboutData');

Route::get('TermsAndCondition','TermsAndConditionController@showTerms');

Route::get('privacyPolicy','privacyPolicyController@showPrivate');

Route::get('subscribedCourses', 'SubscribedCoursesController@showDatas');

    /**
     * These are Jwt verified urls 
     * Created by Structlooper
     * 25/02/20
     */
    Route::group(['middleware' => ['jwt.verify']], function() {
        Route::get('user', 'UserController@getAuthenticatedUser');
        Route::get('closed', 'DataController@closed');
        route::put('update','DataController@updateProfile');
        route::post('imageUpdate','DataController@imageUpdate');
    });