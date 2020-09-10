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

Route::redirect('/','/login');
Route::get('/dlogin', function () {
    return view('dlogin');
});
Route::get('/order', function () {
    return view('order');
});

Route::get('/process', function () {
    return view('backend.orders.process');
});

Route::get('/ddesh', function () {
    return view('ddesh');
});
Route::get('/dtable', function () {
    return view('dtable');
});
Route::get('/ordertable', function () {
    return view('ordertable');
});
Route::get('/details', function () {
    return view('details');
});

Auth::routes();

//backend
Route::group(['as'=>'app.','prefix'=>'app','namespace'=>'Backend','middleware' => ['auth']],function(){
    //home
    Route::get('/dashboard', 'HomeController@index')->name('home');
    //settings
    Route::group(['as'=>'settings.','prefix'=>'settings','middleware'=>['settings']],function(){
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
        Route::get('/','UserController@index')->name('index')->middleware('can:view-any,App\Models\User');
        Route::get('/create','UserController@create')->name('user.create')->middleware('can:create,App\Models\User');;
        Route::post('/create','UserController@store')->name('user.store')->middleware('can:create,App\Models\User');;
        Route::get('/profile/{user}','UserController@show')->name('user.show')->middleware('can:view,user');;
        Route::get('/update/{user}','UserController@edit')->name('user.edit')->middleware('can:update,user');;
        Route::put('/update/{user}','UserController@update')->name('user.update')->middleware('can:update,user');;
        Route::delete('/delete/{user}','UserController@destroy')->name('user.destroy')->middleware('can:delete,user');;
    });


     //shop Owner

     Route::group(['as'=>'shopOwners.','prefix'=>'shopowners'],function(){
        Route::get('/','ShopOwnerController@index')->name('index')->middleware('can:view-any,App\Models\ShopOwner');
        Route::get('/create','ShopOwnerController@create')->name('owner.create')->middleware('can:create,App\Models\ShopOwner');
        Route::post('/create','ShopOwnerController@store')->name('owner.store')->middleware('can:create,App\Models\ShopOwner');
        Route::get('/profile/{owner}','ShopOwnerController@show')->name('owner.show')->middleware('can:view,owner');
        Route::get('/update/{owner}','ShopOwnerController@edit')->name('owner.edit')->middleware('can:update,owner');
        Route::put('/update/{owner}','ShopOwnerController@update')->name('owner.update')->middleware('can:update,owner');
        Route::delete('/delete/{owner}','ShopOwnerController@destroy')->name('owner.destroy')->middleware('can:delete,owner');
    });


    
        //Order 

        Route::group(['as'=>'orders.','prefix'=>'orders'],function(){
            Route::get('/','OrderController@index')->name('index')->middleware('can:view-any,App\Models\Order');
            Route::get('/create','OrderController@create')->name('order.create')->middleware('can:create,App\Models\Order');
            Route::post('/create','OrderController@store')->name('order.store')->middleware('can:create,App\Models\Order');
            Route::get('/profile/{order}','OrderController@show')->name('order.show')->middleware('can:view,order');
            Route::get('/update/{order}','OrderController@edit')->name('order.edit')->middleware('can:update,order');
            Route::put('/update/{order}','OrderController@update')->name('order.update')->middleware('can:update,order');
            Route::delete('/delete/{order}','OrderController@destroy')->name('order.destroy')->middleware('can:delete,order');
            
        });

        //Order table operations
        Route::group(['as'=>'operation.','prefix' => 'order'], function () {
            Route::get('/update/{order}','OrderTableOperation@orderUpdate')->name('update')->middleware('can:create,App\Models\Order');
            Route::get('/filter/','OrderTableOperation@filterBytime')->name('filter.time')->middleware('can:create,App\Models\Order');
        });
    
});

//shop
Route::group(['as'=>'shop.','prefix'=>'shop'],function(){
    Route::get('/{url}','ShopController@index')->name('index');
    Route::post('create/{url}','ShopController@createOrder')->name('order.store');
    Route::post('tracking/','ShopController@tracking')->name('order.tracking');
});
