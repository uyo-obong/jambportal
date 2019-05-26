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



// EXAM ROUTE
Route::get('/', 'ExamController@index');
Route::post('/post', 'ExanController@create');
Route::get('/edit/{id}', 'ExamController@edit');
Route::put('/update/{id}', 'Exam@update');
Route::delete('/delete/{id}', 'ExamController@delete');

// INSTITUTION ROUTE
Route::get('/', 'InstitutionController@index');
Route::post('/post', 'InstitutionController@create');
Route::get('/edit/{id}', 'InstitutionController@edit');
Route::put('/update/{id}', 'InstitutionController@update');
Route::delete('/delete/{id}', 'InstitutionController@delete');

// OLEVEL ROUTE
Route::get('/', 'OlevelController@index');
Route::post('/post', 'OlevelController@create');
Route::get('/edit/{id}', 'OlevelController@edit');
Route::put('/update/{id}', 'OlevelController@update');
Route::delete('/delete/{id}', 'OlevelController@delete');

// SCHOOL ROUTE
Route::get('/', 'SchoolController@index');
Route::post('/post', 'SchoolController@create');
Route::get('/edit/{id}', 'SchoolController@edit');
Route::put('/update/{id}', 'SchoolController@update');
Route::delete('/delete/{id}', 'SchoolController@delete');

// ZONE ROUTE
Route::get('/', 'ZoneController@index');
Route::post('/post', 'ZoneController@create');
Route::get('/edit/{id}', 'ZoneController@edit');
Route::put('/update/{id}', 'ZoneController@update');
Route::delete('/delete/{id}', 'ZoneController@delete');
