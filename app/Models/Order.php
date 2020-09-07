<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $guarder=['id'];


    public function status(){
        return $this->belongsTo(Status::class);
    }
}
