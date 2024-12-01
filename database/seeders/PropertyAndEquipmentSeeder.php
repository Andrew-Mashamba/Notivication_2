<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyAndEquipmentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_and_equipment')->insert([
            array (
  'id' => 1,
  'category_code' => '1700',
  'sub_category_code' => '1710',
  'sub_category_name' => 'buildings',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 2,
  'category_code' => '1700',
  'sub_category_code' => '1712',
  'sub_category_name' => 'depreciation__buildings',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 3,
  'category_code' => '1700',
  'sub_category_code' => '1714',
  'sub_category_name' => 'land',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 4,
  'category_code' => '1700',
  'sub_category_code' => '1716',
  'sub_category_name' => 'equipment',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 5,
  'category_code' => '1700',
  'sub_category_code' => '1718',
  'sub_category_name' => 'depreciation__equipment',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 6,
  'category_code' => '1700',
  'sub_category_code' => '1720',
  'sub_category_name' => 'vehicles',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 7,
  'category_code' => '1700',
  'sub_category_code' => '1722',
  'sub_category_name' => 'depreciation__vehicles',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 8,
  'category_code' => '1700',
  'sub_category_code' => '1724',
  'sub_category_name' => 'leased_rental_property',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 9,
  'category_code' => '1700',
  'sub_category_code' => '1726',
  'sub_category_name' => 'depreciation__leased_property',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 10,
  'category_code' => '1700',
  'sub_category_code' => '1728',
  'sub_category_name' => 'other_assets_and_equipment',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 11,
  'category_code' => '1700',
  'sub_category_code' => '1730',
  'sub_category_name' => 'other_depreciation',
  'created_at' => NULL,
  'updated_at' => NULL,
)
        ]);
    }
}