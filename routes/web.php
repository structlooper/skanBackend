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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Auth verified urls
 * created by structlooper
 * 25/02/2020
 */
    Route::group(['middleware' => ['auth', 'is_admin']], function () {

    Route::get('adminDashboard', 'AdminController@index')->name('adminDashboard');
    Route::get('adminProifile', 'AdminController@adminProifile')->name('adminProifile');
    Route::get('timeline', 'AdminController@timeline')->name('timeline');
    Route::get('changePassword', 'AdminController@resetPass')->name('changePassword');
    Route::put('changing', 'AdminController@changing')->name('changing');
    Route::get('category', "CategoryController@category")->name('category');

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
    Route::post('addingValues', "CategoryController@addingValues")->name('addingValues');

    /**
     * specific entery delting after storing
     * by structlooper
     *
     */
    Route::get('delete/{id}', 'CategoryController@deleting');
    Route::get('data/{id}', 'CategoryController@showData');
    Route::post('dataUpdate/{id}', 'CategoryController@updateValues');

    /**
     * DOM for Bannner
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


    /**
     * DOM for StudyMaterial Datas
     * by structlooper
     */
    Route::get('showStudyMaterial', 'StudyMaterialController@showStudyMaterial')->name('showStudyMaterial');
    Route::get('insertStudyMaterial', 'StudyMaterialController@insertStudyMaterial')->name('insertStudyMaterial');
    Route::post('insertionStudyMaterial', 'StudyMaterialController@insertionStudyMaterial')->name('insertionStudyMaterial');
    Route::get('subOptions/{id}', 'StudyMaterialController@subOptions');
    Route::get('updateStudyMaterial/{id}', 'StudyMaterialController@updateStudyMaterial');
    Route::put('updatationStudyMaterial/{id}', 'StudyMaterialController@updatationStudyMaterial');
    Route::delete('deleteStudyMaterial/{id}', 'StudyMaterialController@deleteStudyMaterial');




    /**
     * MCQs Quiestion routes
     * by structlooper
     */
    Route::get('mcqsQuestion', 'McqQuestionsController@view')->name('mcqsQuestion');
    Route::post('addMcqsCategory', 'McqQuestionsController@addMcqsCategory')->name('addMcqsCategory');
    Route::get('updateMcqsCategory/{id}', 'McqQuestionsController@updateMcqsCategory');
    Route::post('updateMcqsCategory/{id}', 'McqQuestionsController@updateMcqsCategoryupdation');
    Route::delete('deleteMcqsCategory/{id}','McqQuestionsController@deleteMcqsCategory');

    /**
     * Create Quiz Routes
     */
    Route::get('createQuiz/{id}', 'McqQuestionsController@createQuiz')->name('createQuiz');
    Route::post('addMcqsQuizQuestion' , 'McqQuestionsController@addMcqsQuizQuestion')->name('addMcqsQuizQuestion');
    Route::get('updateMcqsQuizQuestion/{id}', 'McqQuestionsController@updateMcqsQuizQuestion');
    Route::put('updatationQuizQuestion/{id}', 'McqQuestionsController@updatationQuizQuestion');
    Route::delete('deleteMcqsQuizQuestion/{id}' , 'McqQuestionsController@deleteMcqsQuizQuestion');



    /**
     *DOM of video Tutorials
     * by Structlooper
     */
    Route::get('videoTutorials' ,'VideoTutorialsController@view')->name('videoTutorials');

    Route::get('insertVideo' ,'VideoTutorialsController@insertVideo')->name('insertVideo');
    Route::post('insertionVideo' , 'VideoTutorialsController@insertionVideo')->name('insertionVideo');
    Route::get('editVideoTutorial/{id}', 'VideoTutorialsController@editVideoTutorial');
    Route::post('updationVideTutorials/{id}', 'VideoTutorialsController@updationVideTutorials');
    Route::delete('deleteVideoTutorial/{id}', 'VideoTutorialsController@deleteVideTutorials');

    /**
     *DOM of Latest Update
     * by Structlooper
     */
    Route::get('latestUpdatesManagement', 'LatestUpdatesController@view')->name('latestUpdatesManagement');
    Route::post('insertionUpdates', 'LatestUpdatesController@insertionUpdates')->name('insertionUpdates');
    Route::get('editUpdates/{id}', 'LatestUpdatesController@editUpdates');
    Route::post('updationUpdates/{id}', 'LatestUpdatesController@updationUpdates');
    Route::delete('deleteUpdates/{id}', 'LatestUpdatesController@deleteUpdates');

    /**
     *DOM of Center Management
     * by Structlooper
     */
    Route::get('centerManagement' , 'CenterController@view')->name('centerManagement');
    Route::post('insertCenter' , 'CenterController@insertCenter')->name('insertCenter');
    Route::get('spiCenter/{id}' ,'CenterController@spiCenter');
    Route::Delete('centerDelete/{id}' , 'CenterController@centerDelete');

    /**
     *DOM of batch Management
     * by Structlooper
     */
    Route::get('batchManagement' , 'BatchController@view')->name('batchManagement');
    Route::get('updateBatch/{id}' , 'BatchController@updateBatch')->name('updateBatch');
    Route::post('updationBatch/{id}' , 'BatchController@updationBatch');
    Route::post('insertBatch' , 'BatchController@insertBatch')->name('insertBatch');
    Route::get('spiBatch/{id}' ,'BatchController@spiBatch');
    Route::Delete('batchDelete/{id}' , 'BatchController@batchDelete');

});

