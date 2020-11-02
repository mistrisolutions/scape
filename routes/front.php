
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

Route::get('team',function(){
    return view('frontend.team');
});

Route::get('portfolio',function(){
    return view('frontend.portfolio');
});

Route::get('contact',function(){
    return view('frontend.contact');
});