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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/pricing', 'PagesController@pricing');
Route::get('/weddings', 'PagesController@weddings');
Route::get('/elopements', 'PagesController@elopements');
Route::get('/shoots', 'PagesController@shoots');
Route::get('/sitemap', 'PagesController@sitemap');
Route::get('/blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');

Route::get('/contact', 'ContactController@contact');
Route::post('/contact', 'ContactController@store');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/posts/{post}/uploads', 'FileController@upload');
Route::post('file', 'FileController@storeFile');
