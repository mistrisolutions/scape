<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded=['id'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setAvatarAttribute($value){
        $extension=$value->extension();
        $this->attributes['avatar']=$value->storeAs('avaters',$this->user->id.'.'. $extension);
    }
}
