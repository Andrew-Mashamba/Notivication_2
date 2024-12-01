<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommoditiesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commodities')->insert([
            array (
  'id' => 1,
  'name' => 'Jan',
  'description' => NULL,
  'unit' => 'Kg',
  'total_liters' => NULL,
  'price_per_kilo' => 1200,
  'total_kilos' => NULL,
  'Status' => 'PENDING',
  'created_at' => '2024-02-07 17:22:33',
  'updated_at' => '2024-08-16 16:07:54',
),
            array (
  'id' => 2,
  'name' => 'Feb',
  'description' => NULL,
  'unit' => 'Kg',
  'total_liters' => NULL,
  'price_per_kilo' => 8000,
  'total_kilos' => NULL,
  'Status' => 'PENDING',
  'created_at' => '2024-02-07 17:23:18',
  'updated_at' => '2024-08-16 16:08:03',
),
            array (
  'id' => 3,
  'name' => 'March',
  'description' => NULL,
  'unit' => 'Kg',
  'total_liters' => NULL,
  'price_per_kilo' => 900,
  'total_kilos' => NULL,
  'Status' => 'PENDING',
  'created_at' => '2024-02-07 17:23:34',
  'updated_at' => '2024-08-16 16:08:11',
),
            array (
  'id' => 4,
  'name' => 'April',
  'description' => NULL,
  'unit' => 'Kg',
  'total_liters' => NULL,
  'price_per_kilo' => 6000,
  'total_kilos' => NULL,
  'Status' => 'PENDING',
  'created_at' => '2024-02-07 17:23:48',
  'updated_at' => '2024-08-16 16:08:22',
),
            array (
  'id' => 5,
  'name' => 'May',
  'description' => NULL,
  'unit' => 'Kg',
  'total_liters' => NULL,
  'price_per_kilo' => 5800,
  'total_kilos' => NULL,
  'Status' => 'PENDING',
  'created_at' => '2024-02-07 17:24:03',
  'updated_at' => '2024-08-16 16:09:24',
),
            array (
  'id' => 6,
  'name' => 'June',
  'description' => NULL,
  'unit' => 'Kg',
  'total_liters' => NULL,
  'price_per_kilo' => 7000,
  'total_kilos' => NULL,
  'Status' => 'PENDING',
  'created_at' => '2024-02-07 17:24:18',
  'updated_at' => '2024-08-16 16:09:46',
),
            array (
  'id' => 7,
  'name' => 'July',
  'description' => NULL,
  'unit' => 'Kg',
  'total_liters' => NULL,
  'price_per_kilo' => 1800,
  'total_kilos' => NULL,
  'Status' => 'PENDING',
  'created_at' => '2024-02-07 17:24:46',
  'updated_at' => '2024-08-16 16:10:02',
),
            array (
  'id' => 8,
  'name' => 'August',
  'description' => NULL,
  'unit' => 'Kg',
  'total_liters' => NULL,
  'price_per_kilo' => 2000,
  'total_kilos' => NULL,
  'Status' => 'PENDING',
  'created_at' => '2024-02-07 17:24:59',
  'updated_at' => '2024-08-16 16:11:44',
),
            array (
  'id' => 9,
  'name' => 'September',
  'description' => NULL,
  'unit' => 'Kg',
  'total_liters' => NULL,
  'price_per_kilo' => 2400,
  'total_kilos' => NULL,
  'Status' => 'PENDING',
  'created_at' => '2024-02-07 17:25:16',
  'updated_at' => '2024-08-16 16:12:00',
),
            array (
  'id' => 10,
  'name' => 'October',
  'description' => NULL,
  'unit' => 'Kg',
  'total_liters' => NULL,
  'price_per_kilo' => 700,
  'total_kilos' => NULL,
  'Status' => 'PENDING',
  'created_at' => '2024-02-07 17:25:29',
  'updated_at' => '2024-08-16 16:12:10',
),
            array (
  'id' => 11,
  'name' => 'November',
  'description' => NULL,
  'unit' => 'L',
  'total_liters' => NULL,
  'price_per_kilo' => 2300,
  'total_kilos' => NULL,
  'Status' => 'PENDING',
  'created_at' => '2024-02-07 17:25:47',
  'updated_at' => '2024-08-16 16:12:18',
),
            array (
  'id' => 12,
  'name' => 'December',
  'description' => NULL,
  'unit' => 'L',
  'total_liters' => NULL,
  'price_per_kilo' => 2800,
  'total_kilos' => NULL,
  'Status' => 'PENDING',
  'created_at' => '2024-02-07 17:26:03',
  'updated_at' => '2024-08-16 16:12:28',
)
        ]);
    }
}