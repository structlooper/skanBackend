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
/**
 * DOM api URLS
 * by structlooper
 */
Route::get('slideData', 'BannerDataController@show');

Route::get('aboutData', 'AboutController@aboutData');

Route::get('termsAndCondition', 'TermsAndConditionController@showTerms');

Route::get('privacyPolicy', 'privacyPolicyController@showPrivate');

Route::get('category' , 'CategoryController@categoryAPI');



Route::get('videoTutorials', 'VideoTutorialsController@viewVideoTutorials');

Route::get('msqTests' , 'McqQuestionsController@getMCQCategory');

Route::get('mcqsQuestion', 'McqQuestionsController@viewMcqsQuestion');


Route::get('latestUpdates', 'LatestUpdatesController@viewApiUpdates');
/**
 * These are Jwt verified urls
 * Created by Structlooper
 * 25/02/20
 */
Route::group(['middleware' => ['jwt.verify']], function () {

	Route::post('updateUserPassword','UserController@updateUserPassword');
    Route::get('subscribedCourses', 'SubscribedCoursesController@showDatas');
    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::get('closed', 'DataController@closed');
    route::post('update', 'DataController@updateProfile');
    route::post('imageUpdate', 'DataController@imageUpdate');
    Route::post('paymentData', 'PaymentController@PayDatas');
});
