<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'PageController@home')->name('home.index');

    // Car(s) routes
    Route::get('/cars', 'CarController@index')->name('car.index');
    Route::get('/cars/{id}', 'CarController@show')->name('car.show');
    
    // About route
    Route::view('/about', 'about')->name('about.show');
    
    // Contact route
    Route::view('/contact', 'contacts')->name('contacts.show');
    
    Route::group(['middleware' => ['guest']], function () {
        // Register routes
        Route::get('/register', 'AuthController@show_register')->name('register.show');
        Route::post('/register', 'AuthController@register')->name('register.perform');
        
        // Login routes
        Route::get('/login', 'AuthController@show_login')->name('login.show');
        Route::post('/login', 'AuthController@login')->name('login.perform');
    });
    
    Route::group(['middleware' => ['auth']], function () {
        
        // Logout routes
        Route::get('/logout', 'AuthController@logout')->name('logout.perform');

        // Users routes
        Route::get('/profile', 'UserController@show')->name('user.show');
        
        // Rent routes
        Route::get('/rental-history', 'RentController@index')->name('rent.index');
        Route::post('/cars/{id}/rent', 'RentController@store')->name('rent.store');
        Route::get('/rental/delete/{id}', 'RentController@destroy')->name('rent.destroy');
    });


    Route::group(['prefix' => 'admin'], function () {
        // Register routes
        Route::get('/register', 'AdminAuthController@show_register')->name('admin.register.show');
        Route::post('/register', 'AdminAuthController@register')->name('admin.register.perform');

        // Login routes
        Route::get('/login', 'AdminAuthController@show_login')->name('admin.login.show');
        Route::post('/login', 'AdminAuthController@login')->name('admin.login.perform');

        Route::group(['middleware' => ['adminauth']], function () {
            // Logout routes
            Route::get('/logout', 'AdminAuthController@logout')->name('admin.logout.perform');

            // Admin home
            Route::view('/', 'admin.index')->name('admin.home');

            //Admin cars 
            Route::get('/cars', 'CarController@index')->name('admin.car.index');
            Route::get('/cars/{id}', 'CarController@show')->where('id', '[0-9]+')->name('admin.car.show');
            Route::get('/cars/create', 'CarController@create')->name('admin.car.create');
            Route::post('/cars/create', 'CarController@store')->name('admin.car.store');
            /**/Route::get('/cars/edit/{id}', 'CarController@edit')->name('admin.car.edit');
            /**/Route::put('/cars/edit/{id}', 'CarController@update')->name('admin.car.update');
            Route::delete('/cars/delete/{id}', 'CarController@destroy')->name('admin.car.destroy');

            //Admin rents 
            Route::get('/rentals', 'RentController@index')->name('admin.rent.index');
            Route::get('/rentals/{id}', 'RentController@show')->where('id', '[0-9]+')->name('admin.rent.show');
            Route::get('/rentals/edit/{id}', 'RentController@edit')->where('id', '[0-9]+')->name('admin.rent.edit');
            /**/Route::put('/rentals/edit/{id}', 'RentController@update')->where('id', '[0-9]+')->name('admin.rent.update');
            Route::delete('/rentals/destroy/{id}', 'RentController@destroy')->where('id', '[0-9]+')->name('admin.rent.destroy');


            //Admin users 
            Route::get('/users', 'UserController@index')->name('admin.user.index');
            Route::get('/users/{id}', 'UserController@show')->name('admin.user.show');
            Route::get('/users/edit/{id}', 'UserController@edit')->name('admin.user.edit');
            Route::put('/users/edit/{id}', 'UserController@update')->name('admin.user.update');
        });
    });
});
