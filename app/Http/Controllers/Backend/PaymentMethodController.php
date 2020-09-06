<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Str;

use Illuminate\Validation\Rule;


use App\Models\PaymentMethod;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.settings.paymentMethods.index',[
            'methods'=>PaymentMethod::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=>['required','max:20','unique:payment_methods'],
            'code'=>['required','max:20','unique:payment_methods'],
        ]);

        PaymentMethod::create([
            'title'=>$request->title,
            'slug'=>Str::slug('$request->title'),
            'code'=>$request->code,
        ]);

        return redirect()->route('app.settings.paymentMethods.index')
                        ->with('success','Method Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentMethod $method)
    {
        //
        $request->validate([
            'title'=>['required','max:20',Rule::unique('payment_methods')->ignore($method->id)],
            'code'=>['required','max:20',Rule::unique('payment_methods')->ignore($method->id)],
        ]);
        $method->update([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'code'=>$request->code,
        ]);

        return redirect()->route('app.settings.paymentMethods.index')
                        ->with('success','Method Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentMethod $method)
    {
        //
        $method->delete();

        return redirect()->route('app.settings.paymentMethods.index')
                        ->with('success','Method Deleted');
    }
}
