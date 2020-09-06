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
    });

    //user

    Route::group(['as'=>'users.','prifix'=>'users'],function(){
        Route::get('/','UserController@index')->name('index');
        Route::get('/create','UserController@create')->name('user.create');
        Route::post('/create','UserController@store')->name('user.store');
    });
    
});
