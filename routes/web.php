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

Route::get('blog/posts/', 'BlogController@article')->name('posts');
Route::get('blog/posts/{slug?}', 'BlogController@post')->name('post');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function(){
  Route::get('/', 'DashboardController@dashboard')->name('admin.index');
  Route::resource('/article', 'ArticleController', ['as'=>'admin']);
});

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/blog', function () {
//     return view('blog.home');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
