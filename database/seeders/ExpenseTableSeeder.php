<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Expense;

class ExpenseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $expense = new Expense;
        $expense->description = 'Uang Bensin';
        $expense->price = 15000;
        $expense->user_id = 2;
        $expense->save();

        $expense = new Expense;
        $expense->description = 'Makan Padang';
        $expense->price = 21000;
        $expense->user_id = 2;
        $expense->save();

        $expense = new Expense;
        $expense->description = 'Biaya Gojek';
        $expense->price = 10000;
        $expense->user_id = 3;
        $expense->save();
    }
}
