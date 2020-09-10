<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Role;
use App\Models\PaymentMethod;
use App\Models\Zone;
use App\Models\ShopOwner;
class ShopOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $role=Role::where('slug','shop-owner')->first();
        $zone=Zone::where('slug','panthapath')->first();
        $payment=PaymentMethod::where('slug','bkash')->first();
        $user=User::updateOrCreate([
            'name'=>'jhon doe',
            'email'=>'owner@mail.com',
            'role_id'=>$role->id,
            'password'=>'password',


        ]);
        $user->profile()->create([
            'phone'=>'0000000',
            'gender'=>'male',
            'address'=>'51/2,rangon tower,west panthapath',
        ]);
        $user->shopOwner()->create([
            'company_name'=>'mustafiz it shop',
            'Zone_id'=>$zone->id,
            'payment_method_id'=>$payment->id,
            'url'=>'Mustafiz it shop',
        ]);
    }
}
