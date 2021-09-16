
<?php
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('frontend.home');
})->name('home');

Route::prefix('about')->group(function () {
    Route::get('/about-us', function () {
        return view('frontend.about.about');
    })->name('about-us');

    Route::get('/who-we-are', function () {
        return view('frontend.about.whoWeAre');
    })->name('who-we-are');
});

Route::get('service',function(){
    return view('frontend.service');
})->name('service');

Route::prefix('portfolio')->group(function () {
    Route::get('/portfolio-1', function () {
        return view('frontend.portfolio.portfolio1');
    })->name('portfolio-1');
    Route::get('/portfolio-1', function () {
        return view('frontend.portfolio.portfolio1');
    })->name('portfolio-1');
    Route::get('/portfolio-1', function () {
        return view('frontend.portfolio.portfolio1');
    })->name('portfolio-1');
});

Route::get('team',function(){
    return view('frontend.team');
})->name('team');

Route::get('gallery',function(){
    return view('frontend.gallery');
})->name('gallery');

Route::get('contact',function(){
    return view('frontend.contact');
})->name('contact');
