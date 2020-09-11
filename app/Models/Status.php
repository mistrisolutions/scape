<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //

    protected $guarded=['id'];


    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function scopeCheckAuth( $query)
    {   if(auth()->user()->isShopOwner()){
            return $query->whereHas('orders', function($query){
                $query->whereHas('shopOwner',function($query){
                    $query->where('id',auth()->user()->shopOwner->id);
                });
            });
        }else{
            return $query->whereHas('orders', function($query){               
                    $query->has('shopOwner');
            });
        }     
    }
}
