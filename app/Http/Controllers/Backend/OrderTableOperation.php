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
                $orders = Order::checkAuth()->whereDay('created_at',$date->day)->paginate(20);
            }elseif(request()->time=="week"){
                $orders = Order::checkAuth()->where('created_at','<=',$date)->paginate(20);
            }elseif(request()->time=="month"){
                $orders = Order::checkAuth()->whereMonth('created_at',$date->month)->paginate(20);
            }elseif(request()->time=="year"){
                $orders = Order::checkAuth()->whereYear('created_at',$date->year)->paginate(20);
            } 
                        
        }elseif(request()->has('status')){

            $orders=Order::checkAuth()->whereHas('status',function($query){
                $query->where('slug',request()->status);
            })->paginate(20);

        }elseif(request()->has('owner')){

            foreach(ShopOwner::all() as $owner){
                if(request()->owner==$owner->id){
                    $orders = $owner->orders()->paginate(20);
                }     
            }
        }
        return view('backend.orders.index',['orders'=>$orders]);
    }



    public function statusChange(Request $request){
        // /dd($request->status_id);
        foreach($request->multiCheck as $id){
            $order=Order::find($id)->update([
                'status_id'=>intval($request->status_id),
            ]);
            
        }
        return redirect()->route('app.orders.index')->with('success','Status Changed');
    }

    



    public function search(Request $request){
        
        $orders=Order::checkAuth()->where('orderid','LIKE',$request->search)
                                    ->orWhere('customerphone','LIKE',$request->search)->paginate(10);
        
        return view('backend.orders.index',['orders'=>$orders]);
    }
}
