<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    //
    protected $guarded=['id'];

    public function shopOwners(){
        return $this->hasMany(ShopOwner::class);
    }

}
