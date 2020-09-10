<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    /**
     * Scope a query to only include popular users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCheckStatus(Builder $query)
    {
        return $query->whereHas('status', function (Builder $query) {
            $query->where('slug', '!=','deliverd');
        });
    }
}
