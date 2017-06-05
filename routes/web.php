<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('admin/login','UsersController@getAdminLogin');
Route::post('admin/postlogin',['as'=>'postLogin','uses'=>'UsersController@postAdminLogin']);
Route::get('admin/logout','UsersController@getAdminLogout');
Route::group(['prefix'=>'admin'],function(){
	
	Route::group(['prefix'=>'users'],function(){
		//admin/users/
		Route::get('list','UsersController@getList');

		Route::post('insert','UsersController@postInsert');
		Route::get('insert','UsersController@getInsert');

		Route::post('edit/{id}','UsersController@postEdit');
		Route::get('edit/{id}','UsersController@getEdit');

		Route::get('delete/{id}','UsersController@delete');
	});
	Route::group(['prefix'=>'classroom'],function(){
		//admin/classroom
		Route::get('list','ClassroomController@getList');

		Route::post('insert','ClassroomController@postInsert');
		Route::get('insert','ClassroomController@getInsert');

		Route::post('edit/{id}','ClassroomController@postEdit');
		Route::get('edit/{id}','ClassroomController@getEdit');

		Route::get('delete/{id}','ClassroomController@delete');
	});
	Route::group(['prefix'=>'subject'],function(){
		//admin/subject
		Route::get('list','SubjectController@getList');

		Route::post('insert','SubjectController@postInsert');
		Route::get('insert','SubjectController@getInsert');

		Route::post('edit/{id}','SubjectController@postEdit');
		Route::get('edit/{id}','SubjectController@getEdit');

		Route::get('delete/{id}','SubjectController@delete');
	});
	Route::group(['prefix'=>'busy-teacher'],function(){
		//admin/subject
		Route::get('list','BusyTeacherController@getList');

		Route::post('insert','BusyTeacherController@postInsert');
		Route::get('insert','BusyTeacherController@getInsert');

		Route::post('edit/{id}','BusyTeacherController@postEdit');
		Route::get('edit/{id}','BusyTeacherController@getEdit');

		Route::get('delete/{id}','BusyTeacherController@delete');
	});
	Route::group(['prefix'=>'busy-classroom'],function(){
		//admin/subject
		Route::get('list','BusyClassroomController@getList');

		Route::post('insert','BusyClassroomController@postInsert');
		Route::get('insert','BusyClassroomController@getInsert');

		Route::post('edit/{id}','BusyClassroomController@postEdit');
		Route::get('edit/{id}','BusyClassroomController@getEdit');

		Route::get('delete/{id}','BusyClassroomController@delete');
	});
	Route::group(['prefix'=>'schedule'],function(){
		//admin/schedule
		Route::get('list','ScheduleController@getList');
		Route::get('list-hand','ScheduleController@getListHand');
		
		Route::post('insert','ScheduleController@postInsert');
		Route::get('insert','ScheduleController@getInsert');

		Route::post('edit/{id}','ScheduleController@postEdit');
		Route::get('edit/{id}','ScheduleController@getEdit');

		Route::get('delete/{id}','ScheduleController@delete');
		Route::get('downloadExcel/{type}','ScheduleController@downloadExcel');
		Route::get('downloadPDF','ScheduleController@downloadPDF');
		Route::get('downloadCSV','ScheduleController@downloadCSV');
	});
	Route::get('home','HomeController@getHome');
	Route::get('period','HomeController@getPeriod');
	Route::get('users-subject','HomeController@getUsersSubject');
	Route::get('calculator','HomeController@getCalculator');
	Route::get('gamecaro','HomeController@getGamecaro');
	Route::get('texteditor','HomeController@getTexteditor');
	Route::get('maps','HomeController@getMaps');

	return view('admin.layout.home');
});