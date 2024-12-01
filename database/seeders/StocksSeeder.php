<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StocksSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert([
            array (
  'id' => 37,
  'commodity_id' => '1',
  'client_id' => 9,
  'kilos' => 567,
  'value' => NULL,
  'pledged_kilos' => 1565,
  'available_kilos' => NULL,
  'created_at' => NULL,
  'updated_at' => NULL,
  'price_per_kilo' => 7899.0,
  'collateral_manager_id' => NULL,
  'status' => 'PENDING',
  'ward_location' => NULL,
  'warehouse' => '55',
  'warehouses_temp' => '55',
  'unit' => 'Kg',
),
            array (
  'id' => 38,
  'commodity_id' => '4',
  'client_id' => 9,
  'kilos' => 1200,
  'value' => NULL,
  'pledged_kilos' => 4387,
  'available_kilos' => NULL,
  'created_at' => NULL,
  'updated_at' => NULL,
  'price_per_kilo' => 6000.0,
  'collateral_manager_id' => NULL,
  'status' => 'RELEASED',
  'ward_location' => NULL,
  'warehouse' => '56',
  'warehouses_temp' => '56',
  'unit' => 'Kg',
),
            array (
  'id' => 39,
  'commodity_id' => '12',
  'client_id' => 9,
  'kilos' => 600,
  'value' => NULL,
  'pledged_kilos' => 1613,
  'available_kilos' => NULL,
  'created_at' => NULL,
  'updated_at' => NULL,
  'price_per_kilo' => 2800.0,
  'collateral_manager_id' => NULL,
  'status' => 'RELEASED',
  'ward_location' => NULL,
  'warehouse' => '56',
  'warehouses_temp' => '56',
  'unit' => 'L',
),
            array (
  'id' => 40,
  'commodity_id' => '4',
  'client_id' => 9,
  'kilos' => 690,
  'value' => NULL,
  'pledged_kilos' => 4387,
  'available_kilos' => NULL,
  'created_at' => NULL,
  'updated_at' => NULL,
  'price_per_kilo' => 6000.0,
  'collateral_manager_id' => NULL,
  'status' => 'PENDING',
  'ward_location' => NULL,
  'warehouse' => '55',
  'warehouses_temp' => '55',
  'unit' => 'Kg',
),
            array (
  'id' => 41,
  'commodity_id' => '12',
  'client_id' => 9,
  'kilos' => 500,
  'value' => NULL,
  'pledged_kilos' => 1613,
  'available_kilos' => NULL,
  'created_at' => NULL,
  'updated_at' => NULL,
  'price_per_kilo' => 2800.0,
  'collateral_manager_id' => NULL,
  'status' => 'PENDING',
  'ward_location' => NULL,
  'warehouse' => '56',
  'warehouses_temp' => '56',
  'unit' => 'L',
),
            array (
  'id' => 42,
  'commodity_id' => '1',
  'client_id' => 18,
  'kilos' => 400,
  'value' => NULL,
  'pledged_kilos' => 8800,
  'available_kilos' => NULL,
  'created_at' => NULL,
  'updated_at' => NULL,
  'price_per_kilo' => 1200.0,
  'collateral_manager_id' => NULL,
  'status' => 'PENDING',
  'ward_location' => NULL,
  'warehouse' => '55',
  'warehouses_temp' => '55',
  'unit' => 'Kg',
),
            array (
  'id' => 43,
  'commodity_id' => '2',
  'client_id' => 18,
  'kilos' => 700,
  'value' => NULL,
  'pledged_kilos' => 2800,
  'available_kilos' => NULL,
  'created_at' => NULL,
  'updated_at' => NULL,
  'price_per_kilo' => 8000.0,
  'collateral_manager_id' => NULL,
  'status' => 'PENDING',
  'ward_location' => NULL,
  'warehouse' => '56',
  'warehouses_temp' => '56',
  'unit' => 'Kg',
),
            array (
  'id' => 44,
  'commodity_id' => '3',
  'client_id' => 19,
  'kilos' => 500,
  'value' => NULL,
  'pledged_kilos' => 300,
  'available_kilos' => NULL,
  'created_at' => NULL,
  'updated_at' => NULL,
  'price_per_kilo' => 900.0,
  'collateral_manager_id' => 26,
  'status' => 'PENDING',
  'ward_location' => NULL,
  'warehouse' => '62',
  'warehouses_temp' => '62',
  'unit' => 'Kg',
),
            array (
  'id' => 45,
  'commodity_id' => '1',
  'client_id' => 18,
  'kilos' => 200,
  'value' => NULL,
  'pledged_kilos' => 8800,
  'available_kilos' => NULL,
  'created_at' => NULL,
  'updated_at' => NULL,
  'price_per_kilo' => 1200.0,
  'collateral_manager_id' => NULL,
  'status' => 'PENDING',
  'ward_location' => NULL,
  'warehouse' => '56',
  'warehouses_temp' => '56',
  'unit' => 'Kg',
),
            array (
  'id' => 46,
  'commodity_id' => '11',
  'client_id' => 18,
  'kilos' => 800,
  'value' => NULL,
  'pledged_kilos' => 600,
  'available_kilos' => NULL,
  'created_at' => NULL,
  'updated_at' => NULL,
  'price_per_kilo' => 2300.0,
  'collateral_manager_id' => NULL,
  'status' => 'PENDING',
  'ward_location' => NULL,
  'warehouse' => '56',
  'warehouses_temp' => '56',
  'unit' => 'L',
),
            array (
  'id' => 47,
  'commodity_id' => '1',
  'client_id' => 19,
  'kilos' => 600,
  'value' => NULL,
  'pledged_kilos' => NULL,
  'available_kilos' => NULL,
  'created_at' => NULL,
  'updated_at' => NULL,
  'price_per_kilo' => 1200.0,
  'collateral_manager_id' => NULL,
  'status' => 'PENDING',
  'ward_location' => NULL,
  'warehouse' => '55',
  'warehouses_temp' => '55',
  'unit' => 'Kg',
)
        ]);
    }
}