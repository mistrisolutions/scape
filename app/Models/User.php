<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    static function getAllUsers(){
        return self::all();
    }

    static function userPagination($number){
        return self::where('role_id','!=','shop_owner')->paginate($number);
    }


    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function isSuperAdmin(){
        if($this->role->slug=='super-admin'){
            return true;
        }
    }

    public function isShopOwner(){
        //dd($this->role);
        if ($this->hasRole('shop-owner')){
            return true;
        }
    }

    public function hasRole($value){
        //dd($this->role);
        if ($this->role->slug==$value){
            return true;
        }
    }

    public function hasAbility($value){
        //dd($value);
        return $this->role->hasAbility($value);
    }

    //relations

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function shopOwner(){
        return $this->hasOne(ShopOwner::class);
    }

    public function notifications(){
        return $this->hasMany(Notification::class);
    }
    //Mutator

    public function setPasswordAttribute($value){
        $this->attributes['password']=HASH::make($value);
    }

}
