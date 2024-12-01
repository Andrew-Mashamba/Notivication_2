<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            array (
  'id' => 1,
  'service_name' => 'SMS SERVICE',
  'service_type' => 'SMS',
  'Status' => 'ACTIVE',
  'created_at' => '2024-08-15 07:56:20',
  'updated_at' => '2024-08-15 07:56:20',
),
            array (
  'id' => 2,
  'service_name' => 'EMAIL SERVICE',
  'service_type' => 'EMAIL',
  'Status' => 'ACTIVE',
  'created_at' => '2024-08-15 07:59:16',
  'updated_at' => '2024-08-15 07:59:16',
)
        ]);
    }
}