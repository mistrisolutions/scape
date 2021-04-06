
<?php
use App\Models\Product;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Frontend.welcome',[
        'products'=>Product::latest()->limit(5)->get()
    ]);
})->name('welcome');

Route::get('/contact', function () {
    return view('Frontend.contact',[
    ]);
})->name('contact');

Route::get('/about', function () {
    return view('Frontend.about',[
    ]);
})->name('about');

Route::get('/services', function () {
    return view('Frontend.services',[
    ]);
})->name('services');

Route::get('/products', function () {
    return view('Frontend.products',[
    ]);
})->name('products');


Route::post('contact',function(Request $request){
    $attributes=$request->validate([
        'name'=>'required|string',
        'email'=>'required|email',
        'phone'=>'required',
        'message'=>'required'

    ]);

    Contact::create($attributes);

    return back()->with('success','Message revieved ,We will contact with you soon');
})->name('contact.store');