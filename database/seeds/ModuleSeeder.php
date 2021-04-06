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

        //categories
        $module=Module::create([
            'title'=>'Category',
            'slug'=>Str::slug('Category'),
        ]);

        $module->abilities()->create([
            'title'=>'View any category',
            'slug'=>Str::slug('View any category'),
        ]);
        $module->abilities()->create([
            'title'=>'Create user',
            'slug'=>Str::slug('Create category'),
        ]);
        $module->abilities()->create([
            'title'=>'View user',
            'slug'=>Str::slug('View category'),
        ]);
        $module->abilities()->create([
            'title'=>'Update user',
            'slug'=>Str::slug('Update category'),
        ]);
        $module->abilities()->create([
            'title'=>'Delete user',
            'slug'=>Str::slug('Delete category'),
        ]);
    }
}
