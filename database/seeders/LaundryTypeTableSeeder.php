<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LaundryType;

class LaundryTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new LaundryType();
        $type->name = "Cuci Kering";
        $type->save();

        $type = new LaundryType();
        $type->name = "Setrika";
        $type->save();

        $type = new LaundryType();
        $type->name = "Cuci";
        $type->save();

        $type = new LaundryType();
        $type->name = "Keringkan";
        $type->save();
    }
}
