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

Route::get('/news', function () {
    return view('news');
});
Route::get('/showphoto', function () {
    return view('/page/post-photo');
});

Route::get('/photo', function () {
    return view('photo');
});
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
Route::get('/profile', function () {   
    return view('/page/profile');
});
Route::get('/editprofile', function () {   
    return view('/page/editprofile');
});

Route::get('/upload', function () {   
    return view('/page/upload');
});

Route::get('/page/{slug}',          ['as' => 'page', 'uses' => 'PageController@show']);

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');





