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

//Route::group(['prefix'=>'api'],function(){
//
//    Route::post('/save_question','ApiController@saveQuestion');
//    Route::post('/update_question/{questionid}','ApiController@updateQuestion');
//    Route::get('/questions','ApiController@getQuestions');
//    Route::get('/question/{questionid}','ApiController@getQuestion');
//    //Route::get('/year_questions/{search}','ApiController@getYearQuestions');
//    Route::get('/year_questions/{search}', array('middleware' => 'cors', 'uses' => 'ApiController@getYearQuestions'));
//
//    Route::post('/save_subscriber','ApiController@saveSubscriber');
//    Route::post('/update_subscriber/{subscriberid}','ApiController@updateSubscriber');
//    Route::get('/subscribers','ApiController@getSubscribers');
//    Route::get('/subscriber/{number}','ApiController@getSubscriber');
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
