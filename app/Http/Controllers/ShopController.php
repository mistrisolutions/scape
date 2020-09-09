<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ShopOwner;

use App\Models\Order;

use App\Models\Status;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($url)
    {
        //
        $shop=ShopOwner::where('url',$url)->first();

        return view('forntend.order',['shop'=>$shop]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function createOrder(Request $request ,$slug)
    {
        //
        $shopOwner=ShopOwner::where('url',$slug)->first();
        $request->validate([
            'customername'=>['required','max:20'],
            'customerphone'=>['required','numeric'],
            'productname'  =>['required','max:50'],
            'quantity'     =>['required','numeric'],
            'address'      =>['required'],
        ]);
       $order=Order::create([
            'customername'=>$request->customername,
            'customerphone'=>$request->customerphone,
            'productname'  =>$request->productname,
            'quantity'     =>$request->quantity,
            'address'      =>$request->address,
            'shop_owner_id'=>$shopOwner->id,
            'status_id'    =>Status::where('slug','panding')->first()->id,
            'orderid'      =>random_int ( 50000 , 10000000 ),
            'zone'         =>$shopOwner->id,
            'note'         =>$request->note,
        ]);

        
        return view('forntend.order',['order'=>$order]);

    }

    public function show($id)
    {
        //
    }


    public function tracking(Request $request){
        $request->validate([
            'order_id'=>['required','numeric'],
        ]);

        $tracking=Order::where('orderid',$request->order_id)->first();
        
        if($tracking){
            return view('forntend.order',['tracking'=>$tracking]);
        }else{
            return redirect()->back()->with('error','No order found by the id');
        }
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
