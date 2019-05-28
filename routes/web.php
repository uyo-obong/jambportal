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


Route::get('/', 'StudentController@index')->name('home.student');

// EXAM ROUTE
Route::get('exam', 'ExamController@index');
Route::post('exam/post', 'ExanController@create');
Route::get('exam/edit/{id}', 'ExamController@edit');
Route::put('exam/update/{id}', 'Exam@update');
Route::delete('exam/delete/{id}', 'ExamController@delete');

// INSTITUTION ROUTE
Route::get('institutions', 'InstitutionController@index');
Route::post('institution/post', 'InstitutionController@create');
Route::get('institution/edit/{id}', 'InstitutionController@edit');
Route::put('institution/update/{id}', 'InstitutionController@update');
Route::delete('institution/delete/{id}', 'InstitutionController@delete');

// OLEVEL ROUTE
Route::get('olevel', 'OlevelController@index');
Route::post('olevel/post', 'OlevelController@create');
Route::get('olevel/edit/{id}', 'OlevelController@edit');
Route::put('olevel/update/{id}', 'OlevelController@update');
Route::delete('olevel/delete/{id}', 'OlevelController@delete');

// SCHOOL ROUTE
Route::get('school', 'SchoolController@index');
Route::post('school/post', 'SchoolController@create');
Route::get('school/edit/{id}', 'SchoolController@edit');
Route::put('school/update/{id}', 'SchoolController@update');
Route::delete('school/delete/{id}', 'SchoolController@delete');

// ZONE ROUTE
Route::get('zone', 'ZoneController@index');
Route::post('zone/post', 'ZoneController@create');
Route::get('zone/edit/{id}', 'ZoneController@edit');
Route::put('zone/update/{id}', 'ZoneController@update');
Route::delete('zone/delete/{id}', 'ZoneController@delete');


// Overwrite  register route
Route::get('portal/register', 'Auth\UserController@showRegistrationForm')->name('portal.register');
Route::post('portal/register', 'Auth\UserController@register')->name('portal.create');
Auth::routes();