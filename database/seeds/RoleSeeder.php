<?php

use Illuminate\Database\Seeder;
Use App\Models\Role;
use Illuminate\Support\Str;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::updateOrCreate([
            'title'=>'Super Admin',
            'slug' =>Str::slug('Super Admin'),
        ]);
        Role::updateOrCreate([
            'title'=>'Shop Owner',
            'slug' =>Str::slug('Shop Owner'),
        ]);
    }
}
