<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoisesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choises')->insert([
            array (
  'id' => 5,
  'client_id' => 1,
  'commodity_id' => 9,
  'kilos' => 56,
  'choise' => 1,
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 6,
  'client_id' => 1,
  'commodity_id' => 5,
  'kilos' => 56,
  'choise' => 1,
  'created_at' => NULL,
  'updated_at' => NULL,
)
        ]);
    }
}