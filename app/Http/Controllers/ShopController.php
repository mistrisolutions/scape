<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ShopOwner;

use App\Models\Order;

use App\Models\Status;

use App\Models\PaymentMethod;

use App\Models\Notification;

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


    public function confirmation(Order $order){
        return view('forntend.confirmation',['order'=>$order]);
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
            'customerphone'=>['required'],
            'productname'  =>['required','max:50'],
            'address'      =>['required'],
        ]);
       $order=Order::create([
            'customername'=>$request->customername,
            'customerphone'=>$request->customerphone,
            'productname'  =>$request->productname,
            'quantity'     =>(!empty($request->quantity))?$request->quantity:1,
            'address'      =>$request->address,
            'shop_owner_id'=>$shopOwner->id,
            'payment_method_id'=>(!empty($request->payment_method_id))?$request->payment_method_id:PaymentMethod::where('slug','on-delivery')->first()->id,
            'status_id'    =>Status::where('slug','pending')->first()->id,
            'orderid'      =>random_int ( 50000 , 10000000 ),
            'zone'         =>$shopOwner->id,
            'note'         =>$request->note,
        ]);

        Notification::create([
            'type'=>'order',
            'message'=>''.$order->orderid.' orderd by customer',
            'user_id'=>$shopOwner->user->id,
        ]);

        
        return redirect()->route('shop.order.confirmation',$order);

    }

    public function show($id)
    {
        //
    }


    public function tracking(){
        $order=Order::where('orderid',request('orderid'))->first();   
           
        if($order){
            return view('forntend.tracking',['order'=>$order]);
        }else{
            $message['message']="No order found with the id";
            return view('forntend.tracking',['message'=>$message]);
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
