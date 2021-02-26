<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = password_hash("monyet", PASSWORD_BCRYPT);
        $user->role = 0;
        $user->save();

        $user = new User();
        $user->name = "Sandikta Galih";
        $user->email = "sandikta@gmail.com";
        $user->password = password_hash("secret", PASSWORD_BCRYPT);
        $user->role = 3;
        $user->outlet_id = 2;
        $user->save();
    }
}
