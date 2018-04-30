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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Routes from Jrean/laravel-verifiaction package
Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');
Route::get('email-verification/check/{token}', 'Auth\RegisterController@getVerification')->name('email-verification.check');

// Admin Routes

Route::group(['middleware'=>'role:admin'],function(){

//    admin view
    Route::get('/admin',function(){
        return view('admin.index');
    })->name('admin');

//    admin users routes
    Route::resource('/admin/users','UsersController');

//    admin posts routes

    Route::get('/admin/posts','PostsController@index')->name('posts.index');

    Route::get('/admin/posts/{post}/edit','PostsController@edit')->name('posts.edit');

    Route::get('/admin/posts/create','PostsController@create')->name('posts.create');

    Route::patch('/admin/posts/{post}','PostsController@update')->name('posts.update');

    Route::delete('/admin/posts/{post}','PostsController@destroy')->name('posts.delete');

//    admin gallery routes

    Route::resource('/admin/photos','PhotosController');

    //    admin videos routes

    Route::resource('/admin/videos','VideosController');

//    admin categories routes

    Route::resource('/admin/categories','CategoriesController');
});

// Logged in users routes

Route::group(['middleware'=>'role:admin,golden_member,subscriber'],function(){

//     Create posts from in front end

    Route::get('/create/post', function() {
        return view('createPosts.create',['categories'=>[1=> 'Novosti']]);
    })->name('create.post');

//    admin post store route

    Route::post('/admin/posts','PostsController@store')->name('posts.store');
});

Route::get('lang/{language}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

// Single post

Route::get('/post/{id}','HomeController@post')->name('post');