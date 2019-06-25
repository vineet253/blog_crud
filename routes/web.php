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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
Route::get('blog-list', 'blogController@index')->name('blog-list');
Route::get('add-blog',  'blogController@add_blog')->name('add-blog');
Route::post('add-blog', 'blogController@add_blog')->name('add-blog');
Route::get('edit-blog/{id}',  'blogController@edit_blog')->name('edit-blog');
Route::post('edit-blog/{id}',  'blogController@edit_blog')->name('edit-blog');
Route::post('delete-blog/{id}',  'blogController@delete_blog')->name('delete-blog');
});
Route::get('font-blog', 'blogController@show')->name('font-blog');
Route::get('blog/{id}',  'blogController@show_detail')->name('blog');
