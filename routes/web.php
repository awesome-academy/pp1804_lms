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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('category', function(){

});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('user/profile', 'UserController@profile')->name('profile');
    Route::get('user/profile/changepassword', 'UserController@showChangePasswordForm')->name('changepassword');
    Route::post('user/profile/changepassword', 'UserController@changePassword')->name('changepassword');
});

Route::prefix('admincp')->name('admin.')->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
});
