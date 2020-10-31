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
    Route::get('/general/profile', 'general\ProfileController@index')->name('general.profile');
    Route::get('/general/profile/index', 'general\ProfileController@index')->name('general.profile.index');
    Route::post('/general/profile/update', 'general\ProfileController@update')->name('general.profile.update');
    Route::get('/general/config', 'general\ConfigController@config')->name('general.config');
    Route::post('/general/config/check', 'general\ConfigController@check')->name('general.config.check');
    Route::post('/general/config/add', 'general\ConfigController@add')->name('general.config.add');
    Route::post('/general/config/edit', 'general\ConfigController@edit')->name('general.config.edit');
    Route::get('/general/attachment', 'general\AttachmentController@index')->name('general.attachment');
    Route::get('/general/attachment/index', 'general\AttachmentController@index')->name('general.attachment.index');
    Route::get('/auth/admin', 'Auth\AdminController@index')->name('auth.admin');
    Route::get('/auth/admin/index', 'Auth\AdminController@index')->name('auth.admin.index');
    Route::any('/auth/admin/add', 'Auth\AdminController@add')->name('auth.admin.add');
    Route::any('/auth/admin/edit', 'Auth\AdminController@edit')->name('auth.admin.edit');
    Route::post('/auth/admin/del', 'Auth\AdminController@del')->name('auth.admin.del');
    Route::get('/auth/adminlog', 'Auth\AdminlogController@index')->name('auth.adminlog');
    Route::get('/auth/adminlog/index', 'Auth\AdminlogController@index')->name('auth.adminlog.index');
    Route::get('/auth/adminlog/detail', 'Auth\AdminlogController@detail')->name('auth.adminlog.detail');
    Route::post('/auth/adminlog/del', 'Auth\AdminlogController@del')->name('auth.adminlog.del');
    Route::get('/auth/group', 'Auth\GroupController@index')->name('auth.group');
    Route::get('/auth/group/index', 'Auth\GroupController@index')->name('auth.group.index');
    Route::any('/auth/group/add', 'Auth\GroupController@add')->name('auth.group.add');
    Route::any('/auth/group/edit', 'Auth\GroupController@edit')->name('auth.group.edit');
    Route::any('/auth/group/del', 'Auth\GroupController@del')->name('auth.group.del');
    Route::post('/auth/group/roletree', 'Auth\GroupController@roletree')->name('auth.group.roletree');
    Route::get('/auth/rule', 'Auth\RuleController@index')->name('auth.rule');
    Route::get('/auth/rule/index', 'Auth\RuleController@index')->name('auth.rule.index');
    Route::any('/auth/rule/add', 'Auth\RuleController@add')->name('auth.rule.add');
    Route::any('/auth/rule/edit', 'Auth\RuleController@edit')->name('auth.rule.edit');
    Route::post('/auth/rule/del', 'Auth\RuleController@del')->name('auth.rule.del');
    Route::post('/auth/rule/multi', 'Auth\RuleController@multi')->name('auth.rule.multi');
    Route::any('/test/test/index', 'Test\\TestController@index')->name('test.test.index');
});
