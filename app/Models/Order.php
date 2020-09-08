<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\ShopOwner;

class Order extends Model
{
    //
    protected $guarded=['id'];


    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function shopOwner(){
        return $this->belongsTo(ShopOwner::class);
    }

    public function setZoneAttribute($value){
        $this->attributes['zone']= ShopOwner::find($value)->zone->id;
    }
}
