<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            array (
  'id' => 2,
  'system_id' => 1,
  'menu_name' => 'Sources',
  'menu_description' => 'Sources',
  'menu_title' => 'Sources',
  'menu_number' => 1,
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 4,
  'system_id' => 1,
  'menu_name' => 'Approvals',
  'menu_description' => 'Approvals',
  'menu_title' => 'Approvals',
  'menu_number' => 10,
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 5,
  'system_id' => 1,
  'menu_name' => 'Offers',
  'menu_description' => 'Offers',
  'menu_title' => 'Offers',
  'menu_number' => 70,
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 7,
  'system_id' => 1,
  'menu_name' => 'Subscribers',
  'menu_description' => 'Subscribers',
  'menu_title' => 'Subscribers',
  'menu_number' => 2,
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 9,
  'system_id' => 1,
  'menu_name' => 'Users',
  'menu_description' => 'Users',
  'menu_title' => 'Users',
  'menu_number' => 11,
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 10,
  'system_id' => 1,
  'menu_name' => 'Collateral Managers',
  'menu_description' => 'Collateral Managers',
  'menu_title' => 'Collateral Managers',
  'menu_number' => 6,
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 11,
  'system_id' => 1,
  'menu_name' => 'Commodities',
  'menu_description' => 'Commodities',
  'menu_title' => 'Commodities',
  'menu_number' => 5,
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 12,
  'system_id' => 1,
  'menu_name' => 'Settings',
  'menu_description' => 'Settings',
  'menu_title' => 'Settings',
  'menu_number' => 4,
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 13,
  'system_id' => 1,
  'menu_name' => 'Reports',
  'menu_description' => 'Report Management',
  'menu_title' => 'Report Management',
  'menu_number' => 9,
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 14,
  'system_id' => 1,
  'menu_name' => 'Branches',
  'menu_description' => 'Branches',
  'menu_title' => 'Branches',
  'menu_number' => 8,
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 15,
  'system_id' => 1,
  'menu_name' => 'Services',
  'menu_description' => 'Services',
  'menu_title' => 'Services',
  'menu_number' => 3,
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 16,
  'system_id' => 1,
  'menu_name' => 'Warehouses',
  'menu_description' => 'Warehouses',
  'menu_title' => 'Warehouses',
  'menu_number' => 7,
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 17,
  'system_id' => 1,
  'menu_name' => 'Notifications',
  'menu_description' => 'Notifications',
  'menu_title' => 'Notifications',
  'menu_number' => 10,
  'created_at' => NULL,
  'updated_at' => NULL,
)
        ]);
    }
}