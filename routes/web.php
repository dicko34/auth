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


    Route::group([
        'as' => 'vendor.',
        'namespace' => 'Vendor',
    ], function(){

        Route::post('cars','CarController@store')->name('cars.store');
        Route::put('cars','CarController@search')->name('cars.search');
        
        Route::post('homes','HomeController@store')->name('homes.store');
        Route::put('homes','HomeController@search')->name('homes.search');

        Route::post('lands/{land}','LandController@store')->name('lands.store');
        Route::put('lands','LandController@search')->name('lands.search');

        Route::post('shops/{shop}','ShopController@changeState')->name('shops.change.state');
        Route::resource('shops', 'ShopController');

        Route::post('lands/{land}','LandController@changeState')->name('lands.change.state');
        Route::resource('lands', 'LandController');
        
        Route::post('jobs/{job}','jobController@changeState')->name('jobs.change.state');
        Route::resource('jobs', 'JobController');

        Route::post('mobiles','MobileController@store')->name('mobiles.store');
        Route::put('mobiles','MobileController@search')->name('mobiles.search');

        Route::post('generals/{general}','GeneralController@changeState')->name('generals.change.state');
        Route::resource('generals', 'GeneralController');

        Route::resource('contacts', 'ContactController');

    });

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
<<<<<<< Updated upstream
Route::any('/cars/search', 'Site\CarController@search')->name('car.search');
Route::any('/car/product/{car}', 'Site\CarController@product')->name('car.product');
Route::any('/cars/add', 'Site\CarController@add')->name('car.add');
=======
Route::any('/cars/search', 'Site\CarController@search')->name('cars.search');
Route::any('/cars/product/{car}', 'Site\CarController@product')->name('cars.product');
Route::any('/cars/add', 'Site\CarController@add')->name('cars.add');
>>>>>>> Stashed changes

Route::any('/choseAdd', 'Site\CarController@choseAdd')->name('choseAdd');

Route::any('/homes', 'Site\HomeController@index')->name('homes.index');
Route::any('/homes/search', 'Site\HomeController@search')->name('homes.search');
<<<<<<< Updated upstream
Route::any('/home/product/{home}', 'Site\HomeController@product')->name('homes.product');
Route::any('/homes/add', 'Site\HomeController@add')->name('homes.add');

Route::any('/shops', 'Site\ShopController@index')->name('shops.index');
Route::any('/shops/search', 'Site\ShopController@search')->name('shops.search');
Route::any('/shops/product/{shop}', 'Site\ShopController@product')->name('shops.product');
Route::any('/shops/add', 'Site\ShopController@add')->name('shops.add');
=======
Route::any('/homes/product/{home}', 'Site\HomeController@product')->name('homes.product');
Route::any('/home/add', 'Site\HomeController@add')->name('home.add');

Route::any('/shopes', 'Site\ShopController@index')->name('shop.index');
Route::any('/shopes/search', 'Site\ShopController@search')->name('shops.search');
Route::any('/shopes/product/{shop}', 'Site\ShopController@product')->name('shops.product');
Route::any('/shopes/add', 'Site\ShopController@add')->name('shops.add');
>>>>>>> Stashed changes

Route::any('/lands', 'Site\LandsController@index')->name('lands.index');
Route::any('/lands/search', 'Site\LandsController@search')->name('lands.search');
<<<<<<< Updated upstream
Route::any('/lands/product', 'Site\LandsController@product')->name('lands.product');
=======
Route::any('/land/product/{land}', 'Site\LandsController@product')->name('lands.product');
>>>>>>> Stashed changes
Route::any('/lands/add', 'Site\LandsController@add')->name('lands.add');

Route::any('/jobs', 'Site\JobsController@index')->name('jobs.index');
Route::any('/jobs/search', 'Site\JobsController@search')->name('jobs.search');
<<<<<<< Updated upstream
Route::any('/jobs/product', 'Site\JobsController@product')->name('jobs.product');
=======
Route::any('/jobs/product/{job}', 'Site\JobsController@product')->name('jobs.product');
>>>>>>> Stashed changes
Route::any('/jobs/add', 'Site\JobsController@add')->name('jobs.add');

Route::any('/mobiles', 'Site\MobilesController@index')->name('mobiles.index');
Route::any('/mobiles/search', 'Site\MobilesController@search')->name('mobiles.search');
<<<<<<< Updated upstream
Route::any('/mobiles/product', 'Site\MobilesController@product')->name('mobiles.product');
=======
Route::any('/mobiles/product/{mobile}', 'Site\MobilesController@product')->name('mobiles.product');
>>>>>>> Stashed changes
Route::any('/mobiles/add', 'Site\MobilesController@add')->name('mobiles.add');

Route::any('/general', 'Site\generalController@index')->name('general.index');
Route::any('/general/search', 'Site\generalController@search')->name('general.search');
Route::any('/general/product', 'Site\generalController@product')->name('general.product');
Route::any('/general/add', 'Site\generalController@add')->name('general.add');

Route::get('/test', function () {
    return view('vendor.mobilesnew.add');
});
Auth::routes();
