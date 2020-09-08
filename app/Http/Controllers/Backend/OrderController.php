<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Status;

use App\Models\Order;

use App\Models\ShopOwner;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['orders']=Order::all();

        return view('backend.orders.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['statuses']=Status::all();
        $data['owners']=ShopOwner::all();

        return view('backend.orders.form',$data);
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
       //dd(random_int ( 50000 , 10000000 ));

        $this->validator($request);

        Order::create([
            'customername'=>$request->customername,
            'customerphone'=>$request->customerphone,
            'productname'  =>$request->productname,
            'quantity'     =>$request->quantity,
            'address'      =>$request->address,
            'shop_owner_id'=>$request->shop_owner_id,
            'status_id'    =>$request->status_id,
            'orderid'      =>random_int ( 50000 , 10000000 ),
            'zone'         =>$request->shop_owner_id,
            'note'         =>$requedst->note,
        ]);

        return redirect()->route('app.orders.index')
                            ->with('success','Order Created');
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
    public function edit(Order $order)
    {
        //

        $data['statuses']=Status::all();
        $data['owners']=ShopOwner::all();
        $data['order']=$order;

        return view('backend.orders.form',$data);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
        $this->validator($request);
        $order->update([
            'customername'=>$request->customername,
            'customerphone'=>$request->customerphone,
            'productname'  =>$request->productname,
            'quantity'     =>$request->quantity,
            'address'      =>$request->address,
            'shop_owner_id'=>$request->shop_owner_id,
            'status_id'    =>$request->status_id,
            'zone'         =>$request->shop_owner_id,
            'note'         =>$request->note,
        ]);

        return redirect()->route('app.orders.index')
                            ->with('success','Order Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
        $order->delete();

        return redirect()->route('app.orders.index')
                            ->with('success','Order Deleted');
    }

    private function validator($request){
        return $request->validate([
            'customername'=>['required','max:20'],
            'customerphone'=>['required','numeric'],
            'productname'  =>['required','max:50'],
            'quantity'     =>['required','numeric'],
            'address'      =>['required'],
            'shop_owner_id'=>['required'],
            'status_id'    =>['required'],
        ]);
    }
}
