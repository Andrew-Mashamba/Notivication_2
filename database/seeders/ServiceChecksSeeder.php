<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceChecksSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_checks')->insert([
            array (
  'id' => 1,
  'service_id' => 1,
  'check_id' => 1,
),
            array (
  'id' => 2,
  'service_id' => 1,
  'check_id' => 2,
),
            array (
  'id' => 3,
  'service_id' => 1,
  'check_id' => 3,
),
            array (
  'id' => 4,
  'service_id' => 1,
  'check_id' => 4,
),
            array (
  'id' => 5,
  'service_id' => 1,
  'check_id' => 8,
),
            array (
  'id' => 6,
  'service_id' => 1,
  'check_id' => 9,
),
            array (
  'id' => 7,
  'service_id' => 1,
  'check_id' => 18,
),
            array (
  'id' => 8,
  'service_id' => 1,
  'check_id' => 20,
),
            array (
  'id' => 9,
  'service_id' => 1,
  'check_id' => 22,
),
            array (
  'id' => 10,
  'service_id' => 1,
  'check_id' => 24,
),
            array (
  'id' => 11,
  'service_id' => 1,
  'check_id' => 26,
),
            array (
  'id' => 12,
  'service_id' => 2,
  'check_id' => 1,
),
            array (
  'id' => 13,
  'service_id' => 2,
  'check_id' => 10,
),
            array (
  'id' => 14,
  'service_id' => 2,
  'check_id' => 11,
),
            array (
  'id' => 15,
  'service_id' => 2,
  'check_id' => 12,
),
            array (
  'id' => 16,
  'service_id' => 2,
  'check_id' => 13,
),
            array (
  'id' => 17,
  'service_id' => 2,
  'check_id' => 14,
),
            array (
  'id' => 18,
  'service_id' => 2,
  'check_id' => 15,
),
            array (
  'id' => 19,
  'service_id' => 2,
  'check_id' => 16,
),
            array (
  'id' => 20,
  'service_id' => 2,
  'check_id' => 17,
),
            array (
  'id' => 21,
  'service_id' => 2,
  'check_id' => 22,
),
            array (
  'id' => 22,
  'service_id' => 2,
  'check_id' => 27,
)
        ]);
    }
}