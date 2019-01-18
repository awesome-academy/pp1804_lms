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

/**
 * FRONTEND
 */

Route::get('/', 'HomeController@index')->name('home');

Route::get('category', 'HomeController@showCategory')->name('category');
Route::get('category/{slug?}', 'HomeController@showDetailCategory')->name('category.detail');

Route::get('books', 'HomeController@showListBook')->name('books');
Route::get('book/{slug?}', 'HomeController@showDetailBook')->name('book.detail');

Route::get('author/{slug?}', 'HomeController@showBookByAuthor')->name('author.detail');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('user/profile', 'UserController@profile')->name('profile');
    Route::get('user/profile/changepassword', 'UserController@showChangePasswordForm')->name('changepassword');
    Route::post('user/profile/changepassword', 'UserController@changePassword')->name('changepassword');
    Route::get('user/favorite', 'UserController@favorite')->name('favorite');
});

/**
 * BACKEND
 */

Route::prefix('admincp')->middleware(['checkrole'])->name('admin.')->namespace('Admin')->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('categories', 'CategoryController');
    Route::resource('users', 'UserController');
});
