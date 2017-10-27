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

// Route::get('/', function () {
//     return view('welcome');
// });



/*
 * 后台路由群组
 * 路由前缀：admin
 * 命名空间: Admin
 */
Route::group(['prefix'=>'admin','namespace'=>'Admin'], function (){

	// 后台首页路由
	Route::get('/index','IndexController@index');
	// Route::get('info','IndexController@info');

    // 用户列表模块
    Route::get('/user', 'UserController@index');
    // 用户搜索
    Route::post('/user', 'UserController@index');
    // Route::get('user/{id}', 'UserController@auth');
	Route::get('/user/create', 'UserController@create');
	Route::post('/user/store', 'UserController@store');


	// 文章模块
	Route::resource('article','ArticleController');







});

