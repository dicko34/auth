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
Route::get('/cars/add', 'Site\CarController@getCarCompanies');
Route::get('get-car-models/{carCompany}', 'Site\CarController@getCarModels');

Route::any('/cars/store', 'Vendor\CarController@store')->name('vendor.cars.store');
Route::any('/choseAdd', 'Site\CarController@choseAdd')->name('choseAdd');

Route::any('/homes', 'Site\HomeController@index')->name('homes.index');
Route::any('/homes/search', 'Site\HomeController@search')->name('homes.search');
Route::any('/homes/product', 'Site\HomeController@product')->name('homes.product');
Route::any('/homes/add', 'Site\HomeController@add')->name('homes.add');
Route::any('/homes/store', 'Vendor\HomeController@store')->name('vendor.homes.store');

Route::any('/shopes', 'Site\ShopController@index')->name('shop.index');
Route::any('/shopes/search', 'Site\ShopController@search')->name('shops.search');
Route::any('/shopes/product/{shop}', 'Site\ShopController@product')->name('shop.product');
Route::any('/shopes/add', 'Site\ShopController@add')->name('shop.add');
Route::any('/shopes/store', 'Vendor\ShopController@store')->name('vendor.shopes.store');

Route::any('/lands', 'Site\LandsController@index')->name('lands.index');
Route::any('/lands/search', 'Site\LandsController@search')->name('lands.search');
Route::any('/land/product/{land}', 'Site\LandsController@product')->name('land.product');
Route::any('/lands/add', 'Site\LandsController@add')->name('land.add');
Route::any('/lands/store', 'Vendor\LandController@store')->name('vendor.lands.store');

Route::any('/jobs', 'Site\JobsController@index')->name('jobs.index');
Route::any('/jobs/search', 'Site\JobsController@search')->name('jobs.search');
Route::any('/jobs/product', 'Site\JobsController@product')->name('jobs.product');
Route::any('/jobs/add', 'Site\JobsController@add')->name('jobs.add');
Route::any('/jobs/store', 'Vendor\JobController@store')->name('vendor.jobs.store');

Route::any('/mobiles', 'Site\MobilesController@index')->name('mobiles.index');
Route::any('/mobiles/search', 'Site\MobilesController@search')->name('mobiles.search');
Route::any('/mobiles/product', 'Site\MobilesController@product')->name('mobiles.product');
Route::any('/mobiles/add', 'Site\MobilesController@add')->name('mobiles.add');
Route::any('/mobiles/store', 'Vendor\MobileController@store')->name('vendor.mobiles.store');

Route::any('/general', 'Site\GeneralController@index')->name('general.index');
Route::any('/general/search', 'Site\GeneralController@search')->name('generals.search');
Route::any('/general/product/{general}', 'Site\GeneralController@product')->name('general.product');
Route::any('/general/add', 'Site\GeneralController@add')->name('general.add');
Route::any('/general/store', 'Vendor\GeneralController@store')->name('vendor.generals.store');
Route::get('/test', function () {
    return view('vendor.mobilesnew.add');
});
Auth::routes();
