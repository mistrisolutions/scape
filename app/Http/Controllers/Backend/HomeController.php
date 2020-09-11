<?php

namespace App\Http\Controllers\Backend;

use App\http\Controllers\Controller;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;
use App\Models\Order;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $date=Carbon::now();
        $order['total']=Order::checkAuth()->whereDay('created_at',$date->day)->count();

        $order['pending']=Order::checkAuth()->whereHas('status',function($query){
                        $query->where('slug','pending');
                            })->whereDay('created_at',$date->day)->count();

        $order['deliverd']=Order::checkAuth()->whereHas('status',function($query){
            $query->where('slug','deliverd');
                })->whereDay('created_at',$date->day)->count(); 

        $order['cancelled']=Order::checkAuth()->whereHas('status',function($query){            
            $query->where('slug','canceld');
                })->whereDay('created_at',$date->day)->count();  
        return view('backend.home.dashboard',['order'=>$order]);
    }
}
