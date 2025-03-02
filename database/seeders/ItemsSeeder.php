<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            array (
  'id' => 1,
  'make_and_model' => 'TOYOTA',
  'year_of_manufacture' => '2004',
  'vin' => '64646767',
  'color' => 'WHITE',
  'mileage' => '80000',
  'purchase_price' => '30000000',
  'down_payment' => '10000000',
  'created_at' => '2024-01-17 17:49:54',
  'updated_at' => '2024-01-17 17:49:54',
),
            array (
  'id' => 2,
  'make_and_model' => 'TOYOTA',
  'year_of_manufacture' => '2004',
  'vin' => '64646767',
  'color' => 'WHITE',
  'mileage' => '80000',
  'purchase_price' => '30000000',
  'down_payment' => '10000000',
  'created_at' => '2024-01-17 17:51:23',
  'updated_at' => '2024-01-17 17:51:23',
),
            array (
  'id' => 3,
  'make_and_model' => 'TOYOTA',
  'year_of_manufacture' => '2004',
  'vin' => '64646767',
  'color' => 'WHITE',
  'mileage' => '80000',
  'purchase_price' => '30000000',
  'down_payment' => '10000000',
  'created_at' => '2024-01-17 17:52:21',
  'updated_at' => '2024-01-17 17:52:21',
),
            array (
  'id' => 4,
  'make_and_model' => 'TOYOTA',
  'year_of_manufacture' => '1999',
  'vin' => '363365645',
  'color' => 'BLACK',
  'mileage' => '500000',
  'purchase_price' => '70000000',
  'down_payment' => '30000000',
  'created_at' => '2024-01-18 11:11:06',
  'updated_at' => '2024-01-18 11:11:06',
),
            array (
  'id' => 5,
  'make_and_model' => 'NISSAN',
  'year_of_manufacture' => '2009',
  'vin' => '5435456456',
  'color' => 'SILVER',
  'mileage' => '60000',
  'purchase_price' => '45000000',
  'down_payment' => '10000000',
  'created_at' => '2024-01-18 11:25:48',
  'updated_at' => '2024-01-18 11:25:48',
),
            array (
  'id' => 6,
  'make_and_model' => 'NISSAN',
  'year_of_manufacture' => '2009',
  'vin' => '5435456456',
  'color' => 'SILVER',
  'mileage' => '60000',
  'purchase_price' => '45000000',
  'down_payment' => '10000000',
  'created_at' => '2024-01-18 11:26:42',
  'updated_at' => '2024-01-18 11:26:42',
),
            array (
  'id' => 7,
  'make_and_model' => 'toyota',
  'year_of_manufacture' => '2021',
  'vin' => '122223333333',
  'color' => 'white',
  'mileage' => '20000',
  'purchase_price' => '1000000',
  'down_payment' => '100000',
  'created_at' => '2024-01-29 21:58:06',
  'updated_at' => '2024-01-29 21:58:06',
),
            array (
  'id' => 8,
  'make_and_model' => 'toyota',
  'year_of_manufacture' => '2021',
  'vin' => '122223333333',
  'color' => 'white',
  'mileage' => '20000',
  'purchase_price' => '1000000',
  'down_payment' => '100000',
  'created_at' => '2024-01-29 21:59:32',
  'updated_at' => '2024-01-29 21:59:32',
)
        ]);
    }
}