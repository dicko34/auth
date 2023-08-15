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


   

});
Route::group([
    'as' => 'vendor.',
    'namespace' => 'Vendor',
], function(){

    Route::post('cars','CarController@store')->name('cars.store');
    
    Route::post('generals','GeneralController@store')->name('generals.store');

    Route::post('homes','HomeController@store')->name('homes.store');

    Route::post('jobs','JobController@store')->name('jobs.store');
    
    Route::post('lands','LandController@store')->name('lands.store');

    Route::post('mobiles','MobileController@store')->name('mobiles.store');

    Route::post('shopes','ShopController@store')->name('shopes.store');

    Route::resource('contacts', 'ContactController');

});
//Auth::routes();
Route::get('/login', function () {
    return view('vendor.login');
})->name('login')->middleware('auth:vendor');

Route::get('/register', function () {
    return view('vendor.register');
})->name('register');

Route::get('/contact', function () {
    return view('vendor.contact');
})->name('contact');


Route::any('/cars', 'Site\CarController@index')->name('car.index');
Route::any('/cars/search', 'Site\CarController@search')->name('cars.search');
Route::any('/car/product/{car}', 'Site\CarController@product')->name('car.product');
Route::any('/car/add', 'Site\CarController@add')->name('car.add');

Route::any('/choseAdd', 'Site\CarController@choseAdd')->name('choseAdd');

Route::any('/homes', 'Site\HomeController@index')->name('home.index');
Route::any('/homes/search', 'Site\HomeController@search')->name('homes.search');
Route::any('/home/product/{home}', 'Site\HomeController@product')->name('home.product');
Route::any('/home/add', 'Site\HomeController@add')->name('home.add');

Route::any('/shopes', 'Site\ShopController@index')->name('shop.index');
Route::any('/shopes/search', 'Site\ShopController@search')->name('shops.search');
Route::any('/shopes/product/{shop}', 'Site\ShopController@product')->name('shop.product');
Route::any('/shopes/add', 'Site\ShopController@add')->name('shop.add');

Route::any('/lands', 'Site\LandsController@index')->name('land.index');
Route::any('/lands/search', 'Site\LandsController@search')->name('lands.search');
Route::any('/land/product/{land}', 'Site\LandsController@product')->name('land.product');
Route::any('/lands/add', 'Site\LandsController@add')->name('land.add');

Route::any('/jobs', 'Site\JobsController@index')->name('job.index');
Route::any('/jobs/search', 'Site\JobsController@search')->name('jobs.search');
Route::any('/job/product/{job}', 'Site\JobsController@product')->name('job.product');
Route::any('/job/add', 'Site\JobsController@add')->name('job.add');

Route::any('/mobiles', 'Site\MobilesController@index')->name('mobile.index');
Route::any('/mobiles/search', 'Site\MobilesController@search')->name('mobiles.search');
Route::any('/mobile/product/{mobile}', 'Site\MobilesController@product')->name('mobile.product');
Route::any('/mobile/add', 'Site\MobilesController@add')->name('mobile.add');

Route::any('/generals', 'Site\GeneralController@index')->name('general.index');
Route::any('/generals/search', 'Site\GeneralController@search')->name('generals.search');
Route::any('/general/product/{general}', 'Site\GeneralController@product')->name('general.product');
Route::any('/general/add', 'Site\GeneralController@add')->name('general.add');

Auth::routes();
