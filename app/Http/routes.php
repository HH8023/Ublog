<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('admin.index');
});
//前台登录
Route::get('home/login','Home\LoginController@login');
Route::get('home/register','Home\LoginController@register');
Route::get('home/code','Home\LoginController@code');
Route::post('home/doregister','Home\LoginController@doRegister');
Route::post('home/dologin','Home\LoginController@doLogin');

//后台登录
Route::get('admin/login', 'Admin\LoginController@index');
Route::get('admin/doLogin', 'Admin\LoginController@doLogin');
Route::get('admin/logout', 'Admin\LoginController@doLogout');

// 后台路由群组
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware' => ['isLogin']], function (){

	// 后台首页路由
	Route::get('index','IndexController@index');
	// Route::get('info','IndexController@info');

    // 用户模块
    Route::get('user', 'UserController@index');
    Route::get('user/{id}', 'UserController@auth');
	Route::post('user/add', 'UserController@add');

	// 文章模块
	Route::resource('article','ArticleController');

	//栏目模块
	Route::resource('subject','SubjectController');

});

