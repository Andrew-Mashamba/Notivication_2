<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceParametersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_parameters')->insert([
            array (
  'id' => 1,
  'service_type' => 'SMS',
  'price_per_unit' => '0.05',
  'limit_per_day' => 1000,
  'created_at' => '2024-08-15 11:43:02',
  'updated_at' => '2024-08-15 11:43:02',
),
            array (
  'id' => 2,
  'service_type' => 'Email',
  'price_per_unit' => '0.01',
  'limit_per_day' => 500,
  'created_at' => '2024-08-15 11:43:02',
  'updated_at' => '2024-08-15 11:43:02',
)
        ]);
    }
}