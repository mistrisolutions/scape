<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\str;

use App\Models\Module;
use App\Models\Ability;


class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $module=Module::create([
            'title'=>'User',
            'slug'=>Str::slug('User'),
        ]);

        $module->abilities()->create([
            'title'=>'View any user',
            'slug'=>Str::slug('View any user'),
        ]);
        $module->abilities()->create([
            'title'=>'Create user',
            'slug'=>Str::slug('Create user'),
        ]);
        $module->abilities()->create([
            'title'=>'View user',
            'slug'=>Str::slug('View user'),
        ]);
        $module->abilities()->create([
            'title'=>'Update user',
            'slug'=>Str::slug('Update user'),
        ]);
        $module->abilities()->create([
            'title'=>'Delete user',
            'slug'=>Str::slug('Delete user'),
        ]);

        //Orders

         //
         $module=Module::create([
            'title'=>'Order',
            'slug'=>Str::slug('Order'),
        ]);
        $module->abilities()->create([
            'title'=>'View any order',
            'slug'=>Str::slug('View any order'),
        ]);
        $module->abilities()->create([
            'title'=>'Create order',
            'slug'=>Str::slug('Create order'),
        ]);
        $module->abilities()->create([
            'title'=>'View order',
            'slug'=>Str::slug('View order'),
        ]);
        $module->abilities()->create([
            'title'=>'Update order',
            'slug'=>Str::slug('Update order'),
        ]);
        $module->abilities()->create([
            'title'=>'Delete order',
            'slug'=>Str::slug('Delete order'),
        ]);

        //Orders

         //
         $module=Module::create([
            'title'=>'Shop owner',
            'slug'=>Str::slug('Shop owner'),
        ]);
        $module->abilities()->create([
            'title'=>'View any shop owner',
            'slug'=>Str::slug('View any shop owner'),
        ]);
        $module->abilities()->create([
            'title'=>'Create order',
            'slug'=>Str::slug('Create shop owner'),
        ]);
        $module->abilities()->create([
            'title'=>'View order',
            'slug'=>Str::slug('View shop owner'),
        ]);
        $module->abilities()->create([
            'title'=>'Update order',
            'slug'=>Str::slug('Update shop owner'),
        ]);
        $module->abilities()->create([
            'title'=>'Delete order',
            'slug'=>Str::slug('Delete shop owner'),
        ]);
    }
}
