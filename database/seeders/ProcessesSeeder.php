<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('processes')->insert([
            array (
  'id' => 14,
  'process_name' => 'CUSTOMER ONBOADING AND STOCK REGISTRATION',
  'created_at' => '2024-07-28 07:32:29',
  'updated_at' => '2024-07-28 07:32:29',
),
            array (
  'id' => 15,
  'process_name' => 'LOAN APPLICATION & SECURITY PERFECTION',
  'created_at' => '2024-07-28 11:44:39',
  'updated_at' => '2024-07-28 11:44:39',
),
            array (
  'id' => 16,
  'process_name' => 'COLLATERAL RELEASE',
  'created_at' => '2024-07-28 12:05:13',
  'updated_at' => '2024-07-28 12:05:13',
),
            array (
  'id' => 17,
  'process_name' => 'SYSTEM MANAGEMENT',
  'created_at' => '2024-07-28 22:54:12',
  'updated_at' => '2024-07-28 22:54:12',
),
            array (
  'id' => 18,
  'process_name' => 'coob',
  'created_at' => '2024-08-15 08:24:27',
  'updated_at' => '2024-08-15 08:24:27',
)
        ]);
    }
}