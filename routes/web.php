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


Auth::routes();

//backend
Route::group(['as'=>'app.','prefix'=>'app','namespace'=>'Backend','middleware' => ['auth']],function(){
    //home
    Route::get('/dashboard', 'HomeController@index')->name('home');
    Route::get('/profile', 'HomeController@profile')->name('profile');
    Route::put('/profile/update/', 'HomeController@updateProfile')->name('profile.update');
    Route::get('/notifications', 'NotificationController@index')->name('notification');
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

});