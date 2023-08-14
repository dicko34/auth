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


//Auth::routes();

Route::get('/','HomeController@index')->name('home');

// Vendor routes
Route::prefix('vendor')->group(function(){
    Route::get('/', 'Users\Vendor\VendorController@index')->name('vendor.dashboard');
    Route::any('/gallery/{id}', 'Users\Vendor\VendorController@gallery')->name('vendor.gallery');

    Route::get('/login', 'Auth\VendorLoginController@showLoginForm')->name('vendor.login');
    Route::post('/login', 'Auth\VendorLoginController@login')->name('vendor.login.submit');
    Route::get('/register', 'Auth\VendorRegisterController@showRegisterForm')->name('vendor.register');
    Route::post('/register', 'Auth\VendorRegisterController@register')->name('vendor.register.submit');

});

//Auth::routes();
Route::get('/login', function () {
    return view('vendor.login');
})->name('login');

Route::get('/register', function () {
    return view('vendor.register');
})->name('register');

Route::get('/contact', function () {
    return view('vendor.contact');
})->name('contact');


Route::any('/cars', 'Site\CarController@index')->name('car.index');
Route::any('/cars/search', 'Site\CarController@search')->name('car.search');
Route::any('/cars/product', 'Site\CarController@product')->name('car.product');
Route::any('/cars/add', 'Site\CarController@add')->name('car.add');

Route::any('/choseAdd', 'Site\CarController@choseAdd')->name('choseAdd');

Route::any('/homes', 'Site\HomeController@index')->name('homes.index');
Route::any('/homes/search', 'Site\HomeController@search')->name('homes.search');
Route::any('/homes/product', 'Site\HomeController@product')->name('homes.product');
Route::any('/homes/add', 'Site\HomeController@add')->name('homes.add');

Route::any('/shops', 'Site\ShopController@index')->name('shops.index');
Route::any('/shops/search', 'Site\ShopController@search')->name('shops.search');
Route::any('/shops/product', 'Site\ShopController@product')->name('shops.product');
Route::any('/shops/add', 'Site\ShopController@add')->name('shops.add');

Route::any('/lands', 'Site\LandsController@index')->name('lands.index');
Route::any('/lands/search', 'Site\LandsController@search')->name('lands.search');
Route::any('/lands/product', 'Site\LandsController@product')->name('lands.product');
Route::any('/lands/add', 'Site\LandsController@add')->name('lands.add');

Route::any('/jobs', 'Site\JobsController@index')->name('jobs.index');
Route::any('/jobs/search', 'Site\JobsController@search')->name('jobs.search');
Route::any('/jobs/product', 'Site\JobsController@product')->name('jobs.product');
Route::any('/jobs/add', 'Site\JobsController@add')->name('jobs.add');

Route::any('/mobiles', 'Site\MobilesController@index')->name('mobiles.index');
Route::any('/mobiles/search', 'Site\MobilesController@search')->name('mobiles.search');
Route::any('/mobiles/product', 'Site\MobilesController@product')->name('mobiles.product');
Route::any('/mobiles/add', 'Site\MobilesController@add')->name('mobiles.add');

Route::any('/general', 'Site\generalController@index')->name('general.index');
Route::any('/general/search', 'Site\generalController@search')->name('general.search');
Route::any('/general/product', 'Site\generalController@product')->name('general.product');
Route::any('/general/add', 'Site\generalController@add')->name('general.add');

Route::get('/test', function () {
    return view('vendor.mobilesnew.add');
});
Auth::routes();
