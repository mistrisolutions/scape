<?php

use Illuminate\Database\Seeder;

use App\Models\Zone;

use Illuminate\Support\Str;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Zone::create([
            "title"=>'Panthapath',
            'slug'=>Str::slug('Panthapath'),
        ]);
        Zone::create([
            "title"=>'Banglamotor',
            'slug'=>Str::slug('Banglamotor'),
        ]);

    }
}
