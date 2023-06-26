<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function(){
    Route::get('/', 'Users\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

    Route::group([
        'as' => 'admin.',
        'namespace' => 'Admin'
    ], function(){
        Route::resource('users', 'userController');

        Route::resource('cars', 'CarController');
        Route::get('car/new', 'CarController@new')->name('cars.new');

        Route::resource('homes', 'HomeController');
        Route::get('home/new', 'HomeController@new')->name('homes.new');

        Route::resource('shops', 'ShopController');
        Route::get('shop/new', 'ShopController@new')->name('shops.new');

        Route::resource('lands', 'LandController');
        Route::get('land/new', 'LandController@new')->name('lands.new');

        Route::resource('jobs', 'JobController');
        Route::get('job/new', 'JobController@new')->name('jobs.new');

        Route::resource('mobiles', 'MobileController');
        Route::get('mobile/new', 'MobileController@new')->name('mobiles.new');

        Route::resource('generals', 'GeneralController');
        Route::get('general/new', 'GeneralController@new')->name('generals.new');

        Route::resource('contacts', 'ContactController');

    });
});
