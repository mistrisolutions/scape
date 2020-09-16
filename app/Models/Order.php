<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\ShopOwner;

class Order extends Model
{
    //
    protected $guarded=['id'];


    public function status(){
        return $this->belongsTo(Status::class);
    }



    public function paymentMethod(){
        return $this->belongsTo(PaymentMethod::class);
    }



    public function shopOwner(){
        return $this->belongsTo(ShopOwner::class);
    }



    public function setZoneAttribute($value){
        $this->attributes['zone']= ShopOwner::find($value)->zone->id;
    }



    public function setImageAttribute($value){
        if($value->hasFile('image')){
            $this->attributes['image']=$value->image->store('products');
        }else
        $this->attributes['image']=null;
    }



    public function setShopOwnerIdAttribute($value){
        if(auth()->user()->isShopOwner()){

            $this->attributes['shop_owner_id']=auth()->user()->shopOwner->id;

        }else

        $this->attributes['shop_owner_id']=$value;

    }

   

    public function scopeCheckAuth( $query)
    {  // dd(auth()->user()->shopOwner);
          if(auth()->user()->isShopOwner()){
            return $query->whereHas('ShopOwner', function($query){
                $query->where('id',auth()->user()->shopOwner->id);
            });
        }else{
            return $query->has('shopOwner');
        }     
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCheckStatus( $query)
    {
        return $query->whereHas('status', function ( $query) {
            $query->where('slug', '!=','deliverd');
        });
    }
}
