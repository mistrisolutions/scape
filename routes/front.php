
<?php
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('frontend.home');
});

Route::get('about',function(){
    return view('frontend.about');
});

Route::get('service',function(){
    return view('frontend.service');
});