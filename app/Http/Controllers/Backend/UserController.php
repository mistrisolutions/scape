<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

use App\Models\Role;

use App\Models\Profile;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=User::userPagination(2);
        //dd($users);
        return view('backend.users.index',[
            "users"=>$users
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
        return view('backend.users.form',['roles'=>Role::getAllRoles()]);
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
       // dd($request->role);
        $request->validate([
            'name'      =>['required','max:20',],
            'email'     =>['required','unique:users','email'],
            'password'  =>['required','min:8','max:20'],
            'phone'     =>['required','max:20'],
            'gender'    =>['required'],
            'role'      =>'required',
            'avatar'    =>['required','mimes:jpeg,png,jpg','max:2048'],
            'address'   =>'required'
        ]);

        //create user
        $user=User::create([
            'name'      =>$request->name,
            'email'     =>$request->email,
            'password'  =>HASH::make($request->password),
            'role_id'   =>$request->role,
        ]);

        //profile create
        Profile::create([
            'user_id'   =>$user->id,
            'phone'     =>$request->phone,
            'gender'    =>$request->gender,
            'address'   =>$request->address,
            'avatar'    =>$request->avatar->store('avaters'),
        ]);

        return redirect()->route('app.users.index');
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
