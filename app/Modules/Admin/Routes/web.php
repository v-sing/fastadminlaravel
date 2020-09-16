<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//登陆
Route::any('/login', 'LoginController@login')->prefix('admin')->name('login');
Route::any('/logout', 'LoginController@logout')->prefix('admin')->name('logout');
Route::any('/ajax/lang', 'AjaxController@lang')->prefix('admin')->name('lang');
Route::any('/ajax/upload', 'AjaxController@upload')->name('upload');
Route::any('/ajax/real', 'AjaxController@real')->prefix('admin')->name('real');
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', function () {
        dd('This is the Admin module index page. Build something great!');
    });
    Route::get('/index', 'IndexController@index')->name('index.index');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    Route::get('/form/index', 'FormController@index')->name('form.index');
    Route::get('/general/profile', 'ProfileController@index')->name('profile.index');
    Route::get('/profile/index', 'ProfileController@index')->name('profile.index');
    Route::post('/profile/update', 'ProfileController@update')->name('profile.update');
    Route::get('/general/config', 'GeneralController@config')->name('general.config');
    Route::post('/general/config/check', 'GeneralController@check')->name('general.config.check');
    Route::post('/general/config/add', 'GeneralController@add')->name('general.config.add');
    Route::post('/general/config/edit', 'GeneralController@edit')->name('general.config.edit');
    Route::get('/general/attachment', 'AttachmentController@index')->name('general.attachment');
    Route::get('/general/attachment/index', 'AttachmentController@index')->name('general.attachment.index');
    Route::get('/auth/admin', 'AuthController@adminIndex')->name('auth.admin');
    Route::get('/auth/admin/index', 'AuthController@adminIndex')->name('auth.admin.index');
});
