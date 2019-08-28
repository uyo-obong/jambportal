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
Route::get('students', 'StudentController@getAll')->name('getall.student');
Route::get('student/registration', 'StudentController@registerStudent')->name('register.student');
Route::post('student/create', 'StudentController@create')->name('create.student');
Route::put('student/update/{id}', 'StudentController@update')->name('update.student');

// TYPE ROUTE
Route::get('types', 'TypeController@index')->name('index.type');
Route::post('type/post', 'TypeController@create')->name('post.type');
Route::get('type/edit/{id}', 'TypeController@edit');
Route::put('type/update/{id}', 'Type@update');
Route::delete('type/delete/{id}', 'TypeController@delete');

// INSTITUTION ROUTE
Route::get('save', 'InstitutionController@index');
Route::post('save/post', 'InstitutionController@create');
Route::get('save/edit/{id}', 'InstitutionController@edit');
Route::put('save/update/{id}', 'InstitutionController@update');
Route::delete('save/delete/{id}', 'InstitutionController@delete');

// ALL INSTITUTION ROUTE
Route::get('institutions', 'AllInstitutionController@index')->name('all.institutions');
Route::post('institution/post', 'AllInstitutionController@create')->name('post.all');
Route::get('institution/edit/{id}', 'AllInstitutionController@edit');
Route::put('institution/update/{id}', 'AllInstitutionController@update');
Route::delete('institution/delete/{id}', 'AllInstitutionController@delete');

// OLEVEL ROUTE
Route::get('olevel', 'OlevelController@index');
Route::post('olevel/post', 'OlevelController@create');
Route::get('olevel/edit/{id}', 'OlevelController@edit');
Route::put('olevel/update/{id}', 'OlevelController@update');
Route::delete('olevel/delete/{id}', 'OlevelController@delete');

// SCHOOL ROUTE
Route::get('schools', 'SchoolController@index')->name('index.school');
Route::post('school/post', 'SchoolController@create')->name('post.school');
Route::get('school/edit/{id}', 'SchoolController@edit');
Route::put('school/update/{id}', 'SchoolController@update');
Route::delete('school/delete/{id}', 'SchoolController@delete');

// DEPARMENT ROUTE
Route::get('departments', 'DepartmentController@index')->name('index.department');
Route::post('department/post', 'DepartmentController@create')->name('post.department');
Route::get('department/edit/{id}', 'DepartmentController@edit');
Route::put('department/update/{id}', 'DepartmentController@update');
Route::delete('department/delete/{id}', 'DepartmentController@delete');

// SUBJECT ROUTE
Route::get('subjects', 'SubjectController@index')->name('index.subject');
Route::post('subject/post', 'SubjectController@create')->name('post.subject');
Route::get('subject/edit/{id}', 'SubjectController@edit');
Route::put('subject/update/{id}', 'SubjectController@update');
Route::delete('subject/delete/{id}', 'SubjectController@delete');

// GRADE ROUTE
Route::get('grades', 'GradeController@index')->name('index.grade');
Route::post('grade/post', 'GradeController@create')->name('post.grade');
Route::get('grade/edit/{id}', 'GradeController@edit');
Route::put('grade/update/{id}', 'GradeController@update');
Route::delete('grade/delete/{id}', 'GradeController@delete');

// ZONE ROUTE
Route::get('zones', 'ZoneController@index')->name('index.zone');
Route::post('zone/post', 'ZoneController@create')->name('post.zone');
Route::get('zone/edit/{id}', 'ZoneController@edit');
Route::put('zone/update/{id}', 'ZoneController@update');
Route::delete('zone/delete/{id}', 'ZoneController@delete');

// CENTER ROUTE
Route::get('centers', 'CenterController@index')->name('index.center');
Route::post('center/post', 'CenterController@create')->name('post.center');
Route::get('center/edit/{id}', 'CenterController@edit');
Route::put('center/update/{id}', 'CenterController@update');
Route::delete('center/delete/{id}', 'CenterController@delete');

// PAYMENT ROUTE
Route::get('payment/all', 'PaymentController@index');
Route::post('payment', 'PaymentController@makePayment')->name('post.payment');
Route::get('payment/edit/{id}', 'PaymentController@edit');

// PRINT SLIP ROUTE
Route::get('getprintout', 'PrintOutController@getprintout')->name('get.print');
Route::post('print', 'PrintOutController@print')->name('post.print');


// Overwrite  register route
Route::get('portal/register', 'Auth\UserController@showRegistrationForm')->name('portal.register');
Route::post('portal/register', 'Auth\UserController@register')->name('portal.create');
Auth::routes();