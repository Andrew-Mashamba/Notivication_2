<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->insert([
            array (
  'id' => 1,
  'name' => 'internal funds transfer',
),
            array (
  'id' => 2,
  'name' => 'external funds transfer',
),
            array (
  'id' => 3,
  'name' => 'TIC',
),
            array (
  'id' => 4,
  'name' => 'mobile payment',
)
        ]);
    }
}