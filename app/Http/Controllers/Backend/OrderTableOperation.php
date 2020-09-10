<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Models\Order;
use App\Models\Status;
use App\Models\ShopOwner;

class OrderTableOperation extends Controller
{
   public function orderUpdate(Order $order){
        if (request()->has('status')){
            $status=Status::where('slug',request()->status)->first();
            $order->update([
                'status_id'=>$status->id,
            ]);
            return redirect()->route('app.orders.index')->with('success','Order status Updated');
        }
        return redirect()->route('app.orders.index')->with('error','Order status Update faild');
    }



    public function filterByTime(){

        if(request()->has('time')){
            $date=Carbon::now();
            if(request()->time=="today"){
                $orders = Order::whereDay('created_at',$date->day)->paginate(5);
            }elseif(request()->time=="week"){
                //dd($date->endOfWeek());
                $orders = Order::where('created_at','<=',$date)->get();
            }elseif(request()->time=="month"){
                $orders = Order::whereMonth('created_at',$date->month)->get();
            }elseif(request()->time=="year"){
                $orders = Order::whereYear('created_at',$date->year)->paginate(2);
            } 
                        
        }elseif(request()->has('status')){

            foreach(Status::all() as $status){
                if(request()->status==$status->slug){
                    $orders = $status->orders;
                }     
            }
            
        }elseif(request()->has('owner')){

            foreach(ShopOwner::all() as $owner){
                if(request()->owner==$owner->id){
                    $orders = $owner->orders;
                }     
            }
        }
        return view('backend.orders.index',['orders'=>$orders]);
    }
}
