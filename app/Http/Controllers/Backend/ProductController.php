<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.products.index',[
            'products'=>Product::latest()->paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.form',[
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'category'=>'required',
            'thumbnail'=>'required|image',
            'description'=>'required'
        ]);
            // dd($request);
        Product::create([
            'name'=>$request->name,
            'category_id'=>$request->category,
            'link'=>$request->url,
            'image'=>$request->thumbnail->store('thumbnails'),
            'description'=>$request->description
        ]);

        return redirect()->route('app.products.index')->with('success','Product Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('backend.products.form',[
            'categories'=>Category::all(),
            'product'=>$product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'=>'required',
            'category'=>'required',
            'description'=>'required'
        ]);
            // dd($request);
        $product->update([
            'name'=>$request->name,
            'category_id'=>$request->category,
            'link'=>$request->url,
            'description'=>$request->description
        ]);

        if($request->hasFile('thumbnail')){
            $request->validate([
                'thumbnail'=>'required|image',
            ]);
            $product->update([
                'image'=>$request->thumbnail->store('thumbnails'),
            ]);
        }

        return redirect()->route('app.products.index')->with('success','Product Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
