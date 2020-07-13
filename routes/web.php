<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/update-locale/{locale}', 'UserController@updateLocale')->name('update-locale');
Route::get('/resume', 'ResumeController@create')->name('resume.create');
Route::get('/resume/{id}', 'ResumeController@edit')->name('resume.edit');
Route::post('/resume', 'ResumeController@store')->name('resume.store');
Route::post('/resume/update', 'ResumeController@update')->name('resume.update');
Route::get('/resumes', 'ResumeController@resumes')->name('resumes');
