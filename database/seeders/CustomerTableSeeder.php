<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer;
        $customer->nik = 'C01';
        $customer->name = 'Ibu Pertiwi';
        $customer->address = 'Jl. Panjang no. 1';
        $customer->phone = '0812 9129 9131';
        $customer->courier_id = 3;
        $customer->point = 0;
        $customer->deposit = 4000;
        $customer->save();

        $customer = new Customer;
        $customer->nik = 'C02';
        $customer->name = 'Ibu Sandi';
        $customer->address = 'Jl. Panjang no. 2';
        $customer->phone = '0812 9129 9132';
        $customer->courier_id = 2;
        $customer->point = 0;
        $customer->deposit = 5000;
        $customer->save();

        $customer = new Customer;
        $customer->nik = 'C03';
        $customer->name = 'Ibu Yengki';
        $customer->address = 'Jl. Panjang no. 3';
        $customer->phone = '0812 9129 9133';
        $customer->courier_id = 3;
        $customer->point = 0;
        $customer->deposit = 5000;
        $customer->save();

    }
}
