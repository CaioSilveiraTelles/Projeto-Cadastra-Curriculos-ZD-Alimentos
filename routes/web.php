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
Route::get('/resume/print/{id}/font/{font}', 'ResumeController@print')->name('resume.print');
Route::post('/resume', 'ResumeController@store')->name('resume.store');
Route::put('/resume/{id}', 'ResumeController@update')->name('resume.update');
Route::get('/resumes', 'ResumeController@resumes')->name('resumes');
Route::post('/resume/education', 'EducationController@store')->name('resume.education.store');
Route::get('/resume/education/{id}', 'EducationController@edit');
Route::get('/resume/career/{id}', 'CareerController@edit');
Route::delete('/resume/education/{id}', 'EducationController@destroy')->name('resume.education.destroy');
Route::delete('/resume/career/{id}', 'CareerController@destroy')->name('resume.career.destroy');
Route::post('/resume/career', 'CareerController@store')->name('resume.career.store');
Route::delete('/resume/social_midia/{id}', 'SocialMidiaController@destroy')->name('resume.social_midia.destroy');
Route::post('/resume/social_midia', 'SocialMidiaController@store')->name('resume.social_midia.store');
Route::get('/resume/carsocial_midiaeer/{id}', 'SocialMidiaController@edit');
