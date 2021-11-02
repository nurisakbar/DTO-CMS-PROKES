<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', 'PageController@home');
Route::get('faq/{slug}', 'PageController@faqDetail');
Route::get('category/{slug}', 'PageController@category');
Route::get('search', 'PageController@search');
Auth::routes();
Route::resource('admin/faq', 'Admin\FaqController');
Route::resource('admin/category', 'Admin\CategoryController');
