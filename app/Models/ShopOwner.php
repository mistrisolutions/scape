<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopOwner extends Model
{
    //
    protected $guarded=['id'];


    public function paymentMethod(){
        return $this->hasMany(ShopOwner::class);
    }

    public function zone(){
        return $this->hasMany(Zone::class);
    }
}
