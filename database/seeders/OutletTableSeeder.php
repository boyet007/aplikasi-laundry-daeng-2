<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Outlet;

class OutletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outlet = new Outlet();
        $outlet->code = "AB001";
        $outlet->name = "Outlet Jatiasih";
        $outlet->address = "Jatiasih no. 1";
        $outlet->phone = "871 8471";
        $outlet->save();

        $outlet = new Outlet();
        $outlet->code = "AB002";
        $outlet->name = "Outlet Glodok";
        $outlet->address = "glodok no. 5";
        $outlet->phone = "871 8472";
        $outlet->save();

        $outlet = new Outlet();
        $outlet->code = "AB003";
        $outlet->name = "Outlet Tangsel";
        $outlet->address = "Dago no. 5";
        $outlet->phone = "871 8473";
        $outlet->save();
    }
}
