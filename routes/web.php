<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'IndexController@index');

Route::get('/about', 'AboutController@index');

Route::view('/services', 'pages.services');

Route::get('/admission', 'AdmissionController@index');
Route::post('/admission', 'AdmissionController@admissionform');

Route::get('/blog', 'BlogController@getblogpost');
Route::get('/blog/{{ $posts->title }}', 'BlogController@post');

Route::get('/gallery', 'GalleryController@index');
Route::post('/gallery', 'IndexController@footercontactform');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@contactform');

Route::get('/enroll', 'EnrollController@index');
Route::post('/enroll', 'EnrollController@subscribe');

// Admin Routes

Route::get('/admin', 'AdminController@index');

Route::get('/post', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');
Route::get('/post/{posts}', 'PostController@show');
Route::get('/post/{posts}/edit', 'PostController@edit');
Route::patch('/post/{posts}', 'PostController@update');
Route::delete('/post/{posts}', 'PostController@destroy');

// Route::get('/post', 'AdminViewPostController@index');

// Auth routes 
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
