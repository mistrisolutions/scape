<?php

use Illuminate\Database\Seeder;

use App\Models\Status;

use Illuminate\Support\Str;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Status::create([
            "title"=>'Panding',
            'slug'=>Str::slug('Panding'),
        ]);
        Status::create([
            "title"=>'Deliverd',
            'slug'=>Str::slug('Deliverd'),
        ]);
        Status::create([
            "title"=>'Processing',
            'slug'=>Str::slug('Processing'),
        ]);
    }
}
