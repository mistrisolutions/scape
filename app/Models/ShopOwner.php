<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class ShopOwner extends Model
{
    //
    protected $guarded=['id'];


    public function paymentMethod(){
        return $this->belongsTo(PaymentMethod::class);
    }

    public function zone(){
        return $this->belongsTo(Zone::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function setUrlAttribute($value){
        $this->attributes['url']="shop/".Str::slug($value);
    }
}
