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

    Route::patch('/admin/posts/{post}','PostsController@update')->name('posts.update');

    Route::delete('/admin/posts/{post}','PostsController@destroy')->name('posts.delete');
});

Route::group(['middleware'=>'role:admin,subscriber'],function(){

//    admin post create route

    Route::get('/admin/posts/create','PostsController@create')->name('posts.create');

//    admin post store route

    Route::post('/admin/posts','PostsController@store')->name('posts.store');
});

Route::get('lang/{language}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);