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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/doctors', 'PagesController@doctors');
Route::get('/department', 'PagesController@department');
Route::get('/Profile', 'PagesController@profile');
Route::get('/registration', 'PagesController@registration');

Auth::routes();

Route::get('specializations' , 'SpecializationController@index');
Route::get('specializations/{id}' , 'SpecializationController@show');
Route::get('doctors' , 'DoctorController@index');
Route::get('doctors/{id}' , 'DoctorController@show');

Route::resource('/appointment' , 'PatientController');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
