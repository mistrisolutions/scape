<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    //
    protected $guarded=['id'];

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function module(){
        return $this->belongsTo(Module::class);
    }
}
