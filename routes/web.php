<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dlogin', function () {
    return view('dlogin');
});
Route::get('/order', function () {
    return view('order');
});

Auth::routes();

//backend
Route::get('/home', 'HomeController@index')->name('home');
//backend
Route::group(['as'=>'app.','prefix'=>'app','namespace'=>'Backend','middleware' => ['auth']],function(){

    //settings
    Route::group(['as'=>'settings.','prefix'=>'settings'],function(){
        //Roles
        Route::get('roles/','RoleController@index')->name('role.index');
        Route::get('roles/create','RoleController@create')->name('role.create');
        Route::post('roles/create','RoleController@store')->name('role.store');
        Route::get('roles/update/{role}','RoleController@edit')->name('role.edit');
        Route::put('roles/update/{role}','RoleController@update')->name('role.update');
        Route::get('roles/abilities/{role}','RoleController@show')->name('role.show');
        Route::delete('roles/delete/{role}','RoleController@destroy')->name('role.destroy');

        //status type
        Route::group(['as'=>'statuss.','prefix'=>'status'],function(){
            Route::get('/','StatusController@index')->name('index');
            Route::post('/create','StatusController@store')->name('status.store');
            Route::put('/update/{status}','StatusController@update')->name('status.update');
            Route::delete('/delete/{status}','StatusController@destroy')->name('status.destroy');
        });

        //payment method
        Route::group(['as'=>'paymentMethods.','prefix'=>'paymentMethods'],function(){
            Route::get('/','PaymentMethodController@index')->name('index');
            Route::post('/create','PaymentMethodController@store')->name('method.store');
            Route::put('/update/{method}','PaymentMethodController@update')->name('method.update');
            Route::delete('/delete/{method}','PaymentMethodController@destroy')->name('method.destroy');
        });

        //Zone
        Route::group(['as'=>'zones.','prefix'=>'zones'],function(){
            Route::get('/','ZoneController@index')->name('index');
            Route::post('/create','ZoneController@store')->name('zone.store');
            Route::put('/update/{zone}','ZoneController@update')->name('zone.update');
            Route::delete('/delete/{zone}','ZoneController@destroy')->name('zone.destroy');
        });
    
    });

    //user

    Route::group(['as'=>'users.','prefix'=>'users'],function(){
        Route::get('/','UserController@index')->name('index');
        Route::get('/create','UserController@create')->name('user.create');
        Route::post('/create','UserController@store')->name('user.store');
        Route::get('/profile/{user}','UserController@show')->name('user.show');
        Route::get('/update/{user}','UserController@edit')->name('user.edit');
        Route::put('/update/{user}','UserController@update')->name('user.update');
        Route::delete('/delete/{user}','UserController@destroy')->name('user.destroy');
    });


     //shop Owner

     Route::group(['as'=>'shopOwners.','prefix'=>'shopOwners'],function(){
        Route::get('/','ShopOwnerController@index')->name('index');
        Route::get('/create','ShopOwnerController@create')->name('owner.create');
        Route::post('/create','ShopOwnerController@store')->name('owner.store');
        Route::get('/profile/{owner}','ShopOwnerController@show')->name('owner.show');
        Route::get('/update/{owner}','ShopOwnerController@edit')->name('owner.edit');
        Route::put('/update/{owner}','ShopOwnerController@update')->name('owner.update');
        Route::delete('/delete/{owner}','ShopOwnerController@destroy')->name('owner.destroy');
    });


    
        //Order 

        Route::group(['as'=>'orders.','prefix'=>'orders'],function(){
            Route::get('/','OrderController@index')->name('index');
            Route::get('/create','OrderController@create')->name('order.create');
            Route::post('/create','OrderController@store')->name('order.store');
            Route::get('/profile/{order}','OrderController@show')->name('order.show');
            Route::get('/update/{order}','OrderController@edit')->name('order.edit');
            Route::put('/update/{order}','OrderController@update')->name('order.update');
            Route::delete('/delete/{order}','OrderController@destroy')->name('order.destroy');
        });
    
});
