<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Str;

use Illuminate\Validation\Rule;

use App\Models\Status;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.settings.statusType.index',[
            'statuss'=>Status::all()
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
        $request->validate([
            'title'=>['required','max:20','unique:statuses']
        ]);

        Status::create([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
        ]);

        return redirect()->route('app.settings.statuss.index')
                        ->with('success','New Status Added');
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
    public function update(Request $request,Status $status)
    {
        //
        $request->validate([
            'title'=>['required','max:20','unique:statuses',Rule::unique('statuses')->ignore($status->id)],
        ]);

        $status->update([
            'title'=>$request->title,
            'slug'=> Str::slug($request->title),
        ]);

        return redirect()->route('app.settings.statuss.index')
                        ->with('success','Status Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        //
        $status->delete();
        
        return redirect()->route('app.settings.statuss.index')
                        ->with('success','Status Deleted');
    }
}
