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

Route::prefix(ADMIN_PATH)->as('admin.')->group(function() {
    Route::get('/', function(){
        return redirect()->to(route('admin.login'));
    });
    Auth::routes(['register' => false]);
    Route::group(['middleware' => 'auth'], function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('profile/change-password', 'ProfileController@change_password')->name('profile.change-password');
        Route::post('profile/update-password', 'ProfileController@update_password')->name('profile.update-password');
        Route::resource('profile', 'ProfileController');
        Route::resource('category', 'CategoryController');
        Route::resource('product', 'ProductController');
        Route::resource('contact-us', 'ContactUsController');
    });
});
