
<?php
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('frontend.home');
})->name('home');

Route::get('about',function(){
    return view('frontend.about');
})->name('about');

Route::get('service',function(){
    return view('frontend.service');
})->name('service');

Route::get('team',function(){
    return view('frontend.team');
})->name('team');

Route::get('gallery',function(){
    return view('frontend.gallery');
})->name('gallery');

Route::get('contact',function(){
    return view('frontend.contact');
})->name('contact');