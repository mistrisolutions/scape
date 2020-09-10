<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Status;

class OrderTableOperation extends Controller
{
   public function orderUpdate(Order $order){
        if ($request->has('status')){
            $status=Status::where('slug',$request->status);
            $order->update([
                'status_id'=>$status->id,
            ]);
            return redirect()->route('orders.index')->with('success','Order status Updated');
        }
        return redirect()->route('orders.index')->with('error','Order status Update faild');
}
