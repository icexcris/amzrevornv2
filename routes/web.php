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

Route::get('/blog', function () {
    return view('/page/post-blog');
});




// Route::get('/photos', function () {
//     return view('photos');
// });

Route::get('/photos', ['as' => 'post.photos', 'uses' => 'PostController@indexPhotos']);


Route::get('/video', function () {
    return view('video');
});

Route::get('/showvideo', function () {
    return view('/page/post-video');
});
Route::get('/ck', function () {
    return view('ck');
});
Route::get('/contact', function () {   
    return view('/page/contact');
});
Route::get('/profile', ['as' => 'user.profile', 'middleware' => 'auth', 'uses'=> 'UserController@profile']);
    
Route::get('/editprofile', ['as' => 'user.editprofile', 'middleware' => 'auth', 'uses'=> 'UserController@edit']);


Route::get('/upload', ['as' => 'page.upload', 'middleware' => 'auth', 'uses' => 'PostController@upload']);
Route::post('/upload', ['as' => 'page.upload.post', 'middleware' => 'auth', 'uses' => 'PostController@uploadPost']);

Route::get('/page/{slug}',          ['as' => 'page', 'uses' => 'PageController@show']);

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/post/{slug}/{id}', ['as' => 'post.show', 'uses'=> 'PostController@show']);

Route::get('/vote/{post_id}/{type}', ['as' => 'post.vote', 'middleware' => 'auth', 'uses'=> 'PostController@vote']);

Route::get('/news/{slug}/{id}', ['as' => 'post.news', 'uses'=> 'PostController@showNews']);

Route::get('/news', function () {
    return view('news');
});

Route::get('/test_move', ['uses'=> 'PostController@testMove']);





