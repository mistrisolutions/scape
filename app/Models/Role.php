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
        return $this->hasMany(User::class);
    }

    public function createAbility($request){
        $this->abilities()->sync($request->abilities);
        
    }

    public function hasAbility($ability){
         if($this->abilities->where('slug',$ability)->first()){
             return true;
         }
 
     } 
     public function hasAbilities($abilities){
         if (is_array($abilities)){
             foreach($abilities as $ability){
                 $this->hasAbility($ability);
             }
         }else{
             $this->hasAbility($abilities);
         }
     }

}
