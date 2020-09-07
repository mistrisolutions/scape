<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Role;

use Illuminate\Validation\Rule;

use App\Models\PaymentMethod;

use App\Models\Zone;

use App\Models\Profile;

use App\Models\ShopOwner;

class ShopOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.shopowner.index',[
            'owners'=>ShopOwner::all(),
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
        $data['roles']=Role::all();
        $data['methods']=PaymentMethod::all();
        $data['zones']=Zone::all();

        return view('backend.shopowner.form',$data);
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
        //dd($request);
       $user= $request->validate([
            'name'      =>['required','max:20',],
            'email'     =>['required','unique:users','email'],
            'password'  =>['required','min:8','max:20','confirmed'],
            'phone'     =>['required','max:20'],
            'gender'    =>['required'],
            'role_id'      =>'required',
            'avatar'    =>['required','mimes:jpeg,png,jpg','max:2048'],
            'address'   =>'required',
            'payment_method_id'=>'required',
            'zone_id'          =>'required',
            'company_name'  =>['required','unique:shop_owners'],
        ]);


        //create user
        $user=User::create([
            'name'      =>$request->name,
            'email'     =>$request->email,
            'password'  =>$request->password,
            'role_id'   =>$request->role_id,
        ]);

        //profile create
        Profile::create([
            'user_id'   =>$user->id,
            'phone'     =>$request->phone,
            'gender'    =>$request->gender,
            'address'   =>$request->address,
            'avatar'    =>$request->avatar,
        ]);
        ShopOwner::create([
            'user_id'      =>$user->id,
            'company_name'=>$request->company_name,
            'payment_method_id'=>$request->payment_method_id,
            'zone_id'      =>$request->zone_id,
            'url'          =>$request->company_name,

        ]);

        return redirect()->route('app.shopOwners.index')
                            ->with('success','New shop owner Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ShopOwner $owner)
    {
        //
        $data['roles']=Role::all();
        $data['methods']=PaymentMethod::all();
        $data['zones']=Zone::all();
        $data['owner']=$owner;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ShopOwner $owner)
    {
        //

        $data['roles']=Role::all();
        $data['methods']=PaymentMethod::all();
        $data['zones']=Zone::all();
        $data['owner']=$owner;
        return view('backend.shopowner.form',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ShopOwner $owner)
    {
        //
        //
        $attributes=$request->validate([
            'name'      =>['required','max:20',],
            'email'     =>['required',Rule::unique('users')->ignore($owner->user->id),'email'],           
            'role_id'      =>'required',            
        ]);

        $profile=$request->validate([
            'phone'     =>['required','max:20'],
            'gender'    =>['required'],
            'address'   =>'required'
        ]);

        $ownerAttributes=$request->validate([
            'company_name'     =>['required','max:30',Rule::unique('shop_owners')->ignore($owner->id)],
            'payment_method_id'    =>['required'],
            'zone_id'   =>'required'
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
       // dd($owner->user->profile);
        $owner->update($ownerAttributes);
        $owner->user->update($attributes);
        $owner->user->profile->update($profile);

        return redirect()->route('app.shopOwners.index')->with('success','Shop Owner updated ');

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
