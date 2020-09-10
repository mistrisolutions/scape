<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\PaymentMethod;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PaymentMethod::create([
            "title"=>'Bkash',
            'slug'=>Str::slug('Bkash'),
            'code'=>001,
        ]);
        PaymentMethod::create([
            "title"=>'Dbbl',
            'slug'=>Str::slug('Dbbl'),
            'code'=>002,
        ]);
        PaymentMethod::create([
            "title"=>'On Delivery',
            'slug'=>Str::slug('On Delivery'),
            'code'=>003,
        ]);
    }
}
