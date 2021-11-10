<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('article/{slug}', 'PageController@article');
Route::get('category/{slug}', 'PageController@category');
Route::get('search', 'PageController@search');
Route::get('reload-captcha', 'Auth\LoginController@reloadCaptcha');

Route::get('profile', 'Admin\UserController@profile');
Route::post('admin/user/{id}/updatePassword', 'Admin\UserController@updatePassword');

Auth::routes(['register' => false]);

Route::resource('admin/article', 'Admin\ArticleController');
Route::resource('admin/category', 'Admin\CategoryController');
Route::resource('admin/user', 'Admin\UserController');
Route::get('home',function(){
    return redirect('admin/article');
});