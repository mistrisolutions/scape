<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $guarded=['id'];

    //get roles
    static function getAllRoles(){
        return self::all();
    }

    static function rolePaginate($number){
        return self::paginate($number);
    }

    public function abilities(){
        return $this->belongsToMany(Ability::class);
    }

    public function users(){
        return $this->hasMany(App\User::class);
    }

}
