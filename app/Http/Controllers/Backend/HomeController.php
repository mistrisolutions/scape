<?php

namespace App\Http\Controllers\Backend;

use App\http\Controllers\Controller;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Notification;
use Illuminate\Validation\Rule;
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


    public function profile(){
        return view('backend.profile.profile');
    }


    public function updateProfile(Request $request){
         //
         $user=auth()->user();
         $attributes=$request->validate([
            'name'      =>['required','max:20',],
            'email'     =>['required',Rule::unique('users')->ignore($user->id),'email'],              
        ]);

        $profile=$request->validate([
            'phone'     =>['required','max:20'],
            'gender'    =>['required'],
            'address'   =>'required'
        ]);
        
        if(!empty($request['password'])){
            //dd('passwordd');
            $request->validate([
                'password'  =>['required','min:8','max:20','confirmed']
            ]);
            $attributes['password']=$request->password;
        }
        if($request->hasFile('avatar')){
            $request->validate([
                'avatar'    =>['required','mimes:jpeg,png,jpg','max:2048'],
            ]);
            $profile['avatar']=$request->avatar;
        }

       // dd($profile);
        $user->update($attributes);
        $user->profile->update($profile);

        if(auth()->user()->isShopOwner()){
            $request->validate([
                'company_name'    =>['required'],
            ]);
            $shop['company_name']=$request->company_name;
            $shop['url']=$request->company_name;

            if($request->hasFile('logo')){
                $request->validate([
                    'logo'    =>['required','mimes:jpeg,png,jpg','max:2048'],
                ]);
                $shop['logo']=$request->logo;
            }
            $user->shopOwner->update($shop);
        }

        Notification::create([
            'type'=>'profile',
            'message'=>'Profile successfully updated',
            'user_id'=>auth()->user()->id,
        ]);

        return redirect()->back()->with('success','Profile updated successfully');
    }
}
