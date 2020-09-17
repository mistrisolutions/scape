<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //

    protected $guarded=['id'];



    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeCheckAuth( $query)
    {  // dd(auth()->user()->shopOwner);
          if(auth()->user()->isShopOwner()){
            return $query->where('user_id',auth()->user()->id);
            
        }else{
            return $query->where('user_id','<',100000000);
        }     
    }
}
