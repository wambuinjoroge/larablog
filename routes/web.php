<?php

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

Route::get('/', function () {
    return view('post.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/post/post', 'PostController@post_store');
Route::get('/post/post', 'PostController@post');
Route::post('/post/comment', 'CommentController@comment_store');
Route::get('/post/comment', 'CommentController@comment');
Route::get('/post/{id}', 'CommentController@show');
Route::get('/author/post', 'PostController@getForm')->name('post.form');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
