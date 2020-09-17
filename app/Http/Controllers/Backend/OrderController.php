<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Carbon;

use App\Models\Status;

use App\Models\Order;

use App\Models\ShopOwner;

use App\Models\Notification;

use App\Models\PaymentMethod;

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
        $data['orders'] = Order::checkAuth()->whereDay('created_at',Carbon::now()->day)->latest('id')->paginate(5);

        return view('backend.orders.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['statuses'] = Status::all();
        $data['owners'] = ShopOwner::all();
        $data['methods'] = PaymentMethod::all();

        return view('backend.orders.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd(random_int ( 50000 , 10000000 ));

        $this->validator($request);

        Order::create([
            'customername' => $request->customername,
            'customerphone' => $request->customerphone,
            'productname' => $request->productname,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'address' => $request->address,
            'image'    =>$request,
            'payment_method_id' => $request->payment_method_id,
            'shop_owner_id' => $request->shop_owner_id,
            'status_id' => $request->status_id,
            'orderid' => random_int(50000, 10000000),
            'zone' => $request->shop_owner_id,
            'note' => $request->note,
        ]);
        Notification::create([
            'type'=>'order',
            'message'=>'A new order has created',
            'user_id'=>auth()->user()->id,
        ]);

        return redirect()->route('app.orders.index')
            ->with('success', 'Order Created');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $order=Order::checkAuth()->find($id);
        if(!$order){
            return redirect()->route('app.orders.index')->with('error','No order found');
        }
        return view('backend.orders.show',['order'=>$order]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $order=Order::checkAuth()->find($id);
        if(!$order){
            return redirect()->route('app.orders.index')->with('error','No order found');
        }
        $this->authorize('update', $order);
        $data['statuses'] = Status::all();
        $data['methods'] = PaymentMethod::all();
        $data['owners'] = ShopOwner::all();
        $data['order'] = $order;

        return view('backend.orders.form', $data);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $order=Order::checkAuth()->find($id);
        if(!$order){
            return redirect()->route('app.orders.index')->with('error','No order found');
        }
        $this->authorize('update', $order);
        $this->validator($request);
        $order->update([
            'customername' => $request->customername,
            'customerphone' => $request->customerphone,
            'productname' => $request->productname,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'address' => $request->address,
            'image'=>$request,
            'payment_method_id' => $request->payment_method_id,
            'shop_owner_id' => $request->shop_owner_id,
            'status_id' => $request->status_id,
            'zone' => $request->shop_owner_id,
            'note' => $request->note,
        ]);

        Notification::create([
            'type'=>'order',
            'message'=>''.$order->orderid.' successfully updated',
            'user_id'=>auth()->user()->id,
        ]);

        if(request('process')){
            return redirect()->back()
            ->with('success', 'Order Updated');
        }else{
            return redirect()->route('app.orders.index')
            ->with('success', 'Order Updated');
        }       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $order=Order::checkAuth()->find($id);
        if(!$order){
            return redirect()->route('app.orders.index')->with('error','No order found');
        }
        $this->authorize('delete', $order);
        $order->update([
            'available'=>0
        ]);

        Notification::create([
            'type'=>'order',
            'message'=>''.$order->orderid.' successfully removed from table',
            'user_id'=>auth()->user()->id,
        ]);

        return redirect()->route('app.orders.index')
            ->with('success', 'Order Deleted');
    }

    private function validator($request)
    {
        return $request->validate([
            'customername' => ['required', 'max:20'],
            'customerphone' => ['required'],
            'productname' => ['required', 'max:50'],
            'quantity' => ['required', 'numeric'],
            'address' => ['required'],
            'shop_owner_id' => ['required'],
            'payment_method_id' => ['required'],
            'status_id' => ['required'],
        ]);
    }

    public function process($id = null)
    {
        if (isset($id))
            $data['order'] = Order::checkAuth()->checkStatus()->latest('id')->findOrFail($id);
        else
            $data['order'] = Order::checkAuth()->checkStatus()->latest('id')->first();
            if($data['order']==null){
                return redirect()->route('app.orders.index')->with('success','No more orders to process');
            }

        $data['previous_order'] = Order::checkAuth()->checkStatus()->where('id', '<', $data['order']->id)->latest('id')->first();
        $data['next_order'] = Order::checkAuth()->checkStatus()->where('id', '>', $data['order']->id)->orderBy('id')->first();
        
        
        return view('backend.orders.process', $data);
    }


    public function processUpdate(Request $request , $id){
        $order=Order::checkAuth()->find($id);
        if(!$order){
            return redirect()->route('app.orders.index')->with('error','No order found');
        }
        $request->validate([
            'customername' => ['required', 'max:20'],
            'customerphone' => ['required'],
            'productname' => ['required', 'max:50'],
            'quantity' => ['required', 'numeric'],
            'address' => ['required'],
        ]);
        if($request->hasFile('image')){
            $request->validate([
                'image'    =>['required','mimes:jpeg,png,jpg','max:2048'],
            ]);
        }
        $order->update([
            'customername' => $request->customername,
            'customerphone' => $request->customerphone,
            'productname' => $request->productname,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'address' => $request->address,
            'image'=>$request,
            'status_id' => $request->status_id,
            'note' => $request->note,
        ]);

        Notification::create([
            'type'=>'order',
            'message'=>''.$order->orderid.' successfully updated',
            'user_id'=>auth()->user()->id,
        ]);

        if($order->status->slug=='deliverd'){
            return redirect()->route('app.orders.order.process')
            ->with('success', 'Order Updated');
        }else{
            return redirect()->route('app.orders.order.process',$order->id)
            ->with('success', 'Order Updated');
        }
        
    }
}
