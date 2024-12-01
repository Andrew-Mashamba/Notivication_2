<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            array (
  'id' => 1,
  'role' => NULL,
  'menu_id' => 13,
  'permission' => 'Can View Releases Stocks Report',
),
            array (
  'id' => 2,
  'role' => NULL,
  'menu_id' => 13,
  'permission' => 'Can View Stock Reports',
),
            array (
  'id' => 3,
  'role' => NULL,
  'menu_id' => 2,
  'permission' => 'Can View Client Details',
),
            array (
  'id' => 4,
  'role' => NULL,
  'menu_id' => 12,
  'permission' => 'Can View Collateral Releases',
),
            array (
  'id' => 5,
  'role' => NULL,
  'menu_id' => 10,
  'permission' => 'Can View Collateral Managers',
),
            array (
  'id' => 6,
  'role' => NULL,
  'menu_id' => 11,
  'permission' => 'Can View Commodities',
),
            array (
  'id' => 7,
  'role' => NULL,
  'menu_id' => 0,
  'permission' => 'Can Register Stocks',
),
            array (
  'id' => 8,
  'role' => NULL,
  'menu_id' => 9,
  'permission' => 'Can Create System User',
),
            array (
  'id' => 9,
  'role' => NULL,
  'menu_id' => 9,
  'permission' => 'Can Update System User',
),
            array (
  'id' => 10,
  'role' => NULL,
  'menu_id' => 9,
  'permission' => 'Can Delete System User',
),
            array (
  'id' => 11,
  'role' => NULL,
  'menu_id' => 9,
  'permission' => 'Can Manage Roles And System Permissions',
),
            array (
  'id' => 12,
  'role' => NULL,
  'menu_id' => 10,
  'permission' => 'Can Create Collateral Managers',
),
            array (
  'id' => 13,
  'role' => NULL,
  'menu_id' => 10,
  'permission' => 'Can Update Collateral Managers',
),
            array (
  'id' => 14,
  'role' => NULL,
  'menu_id' => 10,
  'permission' => 'Can Delete Collateral Managers',
),
            array (
  'id' => 15,
  'role' => NULL,
  'menu_id' => 2,
  'permission' => 'Can Create Client',
),
            array (
  'id' => 16,
  'role' => NULL,
  'menu_id' => 2,
  'permission' => 'Can Update Client',
),
            array (
  'id' => 17,
  'role' => NULL,
  'menu_id' => 2,
  'permission' => 'Can Delete Client',
),
            array (
  'id' => 18,
  'role' => NULL,
  'menu_id' => 11,
  'permission' => 'Can Create Commodity',
),
            array (
  'id' => 19,
  'role' => NULL,
  'menu_id' => 11,
  'permission' => 'Can Update Commodity Prices',
),
            array (
  'id' => 20,
  'role' => NULL,
  'menu_id' => 11,
  'permission' => 'Can Delete Commodity',
),
            array (
  'id' => 21,
  'role' => NULL,
  'menu_id' => 10,
  'permission' => 'Can Register Collateral',
),
            array (
  'id' => 22,
  'role' => NULL,
  'menu_id' => 12,
  'permission' => 'Can Request Releases Stocks',
),
            array (
  'id' => 23,
  'role' => NULL,
  'menu_id' => 4,
  'permission' => 'Can Approve Releases Stocks',
),
            array (
  'id' => 24,
  'role' => NULL,
  'menu_id' => 12,
  'permission' => 'Can Reject Release Requests',
),
            array (
  'id' => 25,
  'role' => NULL,
  'menu_id' => 12,
  'permission' => 'Can Request Releases Stocks',
),
            array (
  'id' => 26,
  'role' => NULL,
  'menu_id' => 4,
  'permission' => 'Can Approve Create System User',
),
            array (
  'id' => 27,
  'role' => NULL,
  'menu_id' => 4,
  'permission' => 'Can Approve Update System User',
),
            array (
  'id' => 28,
  'role' => NULL,
  'menu_id' => 4,
  'permission' => 'Can Approve Delete System User',
),
            array (
  'id' => 29,
  'role' => NULL,
  'menu_id' => 4,
  'permission' => 'Can Approve Create Collateral Managers',
),
            array (
  'id' => 30,
  'role' => NULL,
  'menu_id' => 4,
  'permission' => 'Can Approve Update Collateral Managers',
),
            array (
  'id' => 31,
  'role' => NULL,
  'menu_id' => 4,
  'permission' => 'Can Approve Delete Collateral Managers',
),
            array (
  'id' => 32,
  'role' => NULL,
  'menu_id' => 4,
  'permission' => 'Can Approve Create Client',
),
            array (
  'id' => 33,
  'role' => NULL,
  'menu_id' => 4,
  'permission' => 'Can Approve Update Client',
),
            array (
  'id' => 34,
  'role' => NULL,
  'menu_id' => 4,
  'permission' => 'Can Approve Delete Client',
),
            array (
  'id' => 35,
  'role' => NULL,
  'menu_id' => 4,
  'permission' => 'Can Approve Create Commodity',
),
            array (
  'id' => 36,
  'role' => NULL,
  'menu_id' => 4,
  'permission' => 'Can Approve Update Commodity Prices',
),
            array (
  'id' => 37,
  'role' => NULL,
  'menu_id' => 4,
  'permission' => 'Can Approve Delete Commodity',
),
            array (
  'id' => 38,
  'role' => NULL,
  'menu_id' => 9,
  'permission' => 'Can create user roles',
),
            array (
  'id' => 39,
  'role' => NULL,
  'menu_id' => 10,
  'permission' => 'Can edit user roles',
),
            array (
  'id' => 40,
  'role' => NULL,
  'menu_id' => 9,
  'permission' => 'Can block or delete user roles',
),
            array (
  'id' => 41,
  'role' => NULL,
  'menu_id' => 4,
  'permission' => 'Can approve creation of or deletion/blocking of user roles',
),
            array (
  'id' => 42,
  'role' => NULL,
  'menu_id' => 5,
  'permission' => 'Can create offers',
),
            array (
  'id' => 43,
  'role' => NULL,
  'menu_id' => 7,
  'permission' => 'Can create applications',
),
            array (
  'id' => 44,
  'role' => NULL,
  'menu_id' => 14,
  'permission' => 'Can create branches',
),
            array (
  'id' => 45,
  'role' => NULL,
  'menu_id' => 15,
  'permission' => 'Can View Collaterals',
),
            array (
  'id' => 46,
  'role' => NULL,
  'menu_id' => 16,
  'permission' => 'Can View Warehouses',
)
        ]);
    }
}