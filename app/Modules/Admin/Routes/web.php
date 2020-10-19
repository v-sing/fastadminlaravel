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
Route::get('/index', 'IndexController@index')->prefix('admin')->name('index.index');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        dd('This is the Admin module index page. Build something great!');
    });
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    Route::get('/form/index', 'FormController@index')->name('form.index');
    Route::get('/general/profile', 'ProfileController@index')->name('general.profile');
    Route::get('/general/profile/index', 'ProfileController@index')->name('general.profile.index');
    Route::post('/general/profile/update', 'ProfileController@update')->name('general.profile.update');
    Route::get('/general/config', 'GeneralController@config')->name('general.config');
    Route::post('/general/config/check', 'GeneralController@check')->name('general.config.check');
    Route::post('/general/config/add', 'GeneralController@add')->name('general.config.add');
    Route::post('/general/config/edit', 'GeneralController@edit')->name('general.config.edit');
    Route::get('/general/attachment', 'AttachmentController@index')->name('general.attachment');
    Route::get('/general/attachment/index', 'AttachmentController@index')->name('general.attachment.index');
    Route::get('/auth/admin', 'AdminController@index')->name('auth.admin');
    Route::get('/auth/admin/index', 'AdminController@index')->name('auth.admin.index');
    Route::any('/auth/admin/add', 'AdminController@add')->name('auth.admin.add');
    Route::any('/auth/admin/edit', 'AdminController@edit')->name('auth.admin.edit');
    Route::post('/auth/admin/del', 'AdminController@del')->name('auth.admin.del');
    Route::get('/auth/adminlog', 'AdminlogController@index')->name('auth.adminlog');
    Route::get('/auth/adminlog/index', 'AdminlogController@index')->name('auth.adminlog.index');
    Route::get('/auth/adminlog/detail', 'AdminlogController@detail')->name('auth.adminlog.detail');
    Route::post('/auth/adminlog/del', 'AdminlogController@del')->name('auth.adminlog.del');
    Route::get('/auth/group', 'GroupController@index')->name('auth.group');
    Route::get('/auth/group/index', 'GroupController@index')->name('auth.group.index');
    Route::any('/auth/group/add', 'GroupController@add')->name('auth.group.add');
    Route::any('/auth/group/edit', 'GroupController@edit')->name('auth.group.edit');
    Route::any('/auth/group/del', 'GroupController@del')->name('auth.group.del');
    Route::post('/auth/group/roletree', 'GroupController@roletree')->name('auth.group.roletree');
});
