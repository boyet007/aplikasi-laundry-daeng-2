<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LaundryPrice;

class LaundryPriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price = new LaundryPrice;
        $price->name = "Jasa Laundry Kiloan";
        $price->unit_type = "Kilogram";
        $price->laundry_type_id = 1;
        $price->price = 11000;
        $price->user_id = 2;
        $price->save();

        $price = new LaundryPrice;
        $price->name = "Kemeja";
        $price->unit_type = "Potong";
        $price->laundry_type_id = 2;
        $price->price = 20000;
        $price->user_id = 2;
        $price->save();
    }
}
