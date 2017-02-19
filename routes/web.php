<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('index');
});
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');
Route::get('/photos/{category?}',              ['as' => 'post.photos', 'uses' => 'PostController@indexPhotos']);

Route::get('/ck', function () {
    return view('ck');
});
Route::get('/contact', function () {   
    return view('/page/contact');
});
Route::get('/profile',              ['as' => 'user.profile', 'middleware' => 'auth', 'uses'=> 'UserController@profile']);
    
Route::get('/editprofile',          ['as' => 'user.editprofile', 'middleware' => 'auth', 'uses'=> 'UserController@edit']);
Route::get('/upload',               ['as' => 'page.upload', 'middleware' => 'auth', 'uses' => 'PostController@upload']);
Route::post('/upload',              ['as' => 'page.upload.post', 'middleware' => 'auth', 'uses' => 'PostController@uploadPost']);
Route::get('/page/{slug}',          ['as' => 'page', 'uses' => 'PageController@show']);
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

// EDIT ACCOUNT
Route::post('/user/save-account',    ['as' => 'store.account', 'uses' => 'UserController@storeAccount']);
Route::post('/user/save-password',   ['as' => 'store.password', 'uses' => 'UserController@storePassword']);

Route::get('/post/{slug}/{id}',      ['as' => 'post.show', 'uses'=> 'PostController@show']);
Route::post('/post/comment/{id}',       ['as' => 'post.store.comment', 'uses'=> 'CommentController@store']);

Route::get('/photos/{slug}/{id}',       ['as' => 'photos.show', 'uses'=> 'PostController@showPhotos']);
Route::get('/videos/{slug}/{id}',       ['as' => 'videos.show', 'uses'=> 'VideoController@showVideos']);
Route::get('/vote/{post_id}/{type}',    ['as' => 'post.vote', 'middleware' => 'auth', 'uses'=> 'PostController@vote']);
Route::get('/news/{category?}',                     ['as' => 'post.news', 'uses' => 'PostController@indexNews']);
Route::get('/video/{category?}',        ['as' => 'post.videos', 'uses' => 'VideoController@indexVideos']);
Route::post('/video_create',            ['as' => 'post.video_store', 'middleware' => 'auth', 'uses' => 'VideoController@videoStore']);
Route::get('/test_move',                ['uses'=> 'PostController@testMove']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	Route::get('/index', 					['as' => 'dashboard', 'uses' => 'Admin\DashboardController@index']);

	Route::get('/users', 					['as' => 'users.index', 'uses' => 'Admin\UserController@index']);
	Route::get('/users/delete/{id}',		['as' => 'users.destroy', 'uses' => 'Admin\UserController@destroy']);
	Route::get('/users/edit/{id}', 			['as' => 'users.update', 'uses' => 'Admin\UserController@update']);

	Route::get('/categories', 				['as' => 'categories.index', 'uses' => 'Admin\CategoryController@index']);
	Route::get('/categories/create', 		['as' => 'categories.create', 'uses' => 'Admin\CategoryController@create']);
	Route::get('/categories/destroy/{id}', 	['as' => 'categories.destroy', 'uses' => 'Admin\CategoryController@destroy']);
	Route::post('/categories/store', 		['as' => 'categories.store', 'uses' => 'Admin\CategoryController@store']);

	Route::group(['prefix' => 'blog'], function () {
		Route::get('/', 					['as' => 'posts.blog.index', 'uses' => 'Admin\BlogController@index']);
		Route::get('/update/{id}', 			['as' => 'posts.blog.update', 'uses' => 'Admin\BlogController@update']);
	});

	Route::group(['prefix' => 'videos'], function () {
		Route::get('/', 					['as' => 'posts.video.index', 'uses' => 'Admin\VideoController@index']);
		Route::get('/create',				['as' => 'posts.video.create', 'uses' => 'Admin\VideoController@create']);
		Route::post('/store',				['as' => 'posts.video.store', 'uses' => 'Admin\VideoController@store']);
		Route::get('/{id}',					['as' => 'posts.video.update', 'uses' => 'Admin\VideoController@update']);
		Route::get('/delete/{id}',			['as' => 'posts.video.destroy', 'uses' => 'Admin\VideoController@destroy']);
		Route::post('/update/{id}',			['as' => 'posts.video.sotreupdate', 'uses' => 'Admin\VideoController@storeUpdate']);
	});
/*Pages*/
	Route::group(array('prefix' => 'pages'), function(){
		Route::get('/', 				['as' => 'admin.pages', 'middleware' => 'auth', 'uses' => 'Admin\AdminPagesController@index']);
		Route::get('/new', 				['as' => 'admin.pages.create', 'middleware' => 'auth', 'uses' => 'Admin\AdminPagesController@create']);
		Route::post('/new', 			['as' => 'admin.pages.create.post', 'middleware' => 'auth', 'uses' => 'Admin\AdminPagesController@store']);
		Route::get('/edit/{id}',		['as' => 'admin.pages.edit', 'middleware' => 'auth', 'uses' => 'Admin\AdminPagesController@edit']);
		Route::post('/edit/{id}',		['as' => 'admin.pages.edit.post', 'middleware' => 'auth', 'uses' => 'Admin\AdminPagesController@update']);
		Route::get('/delete/{id}', 		['as' => 'admin.pages.delete', 'middleware' => 'auth', 'uses' => 'Admin\AdminPagesController@destroy']);
	});

});
