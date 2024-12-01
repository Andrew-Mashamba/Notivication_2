<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchasesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purchases')->insert([
            array (
  'id' => 5,
  'requisition_description' => 'REQUESTING FOR NEW COMPUTER',
  'quantity' => 2,
  'vendorId' => 0,
  'branchId' => NULL,
  'status' => 'PENDING',
  'created_at' => '2023-08-01 20:50:25',
  'updated_at' => '2023-10-16 10:18:58',
  'employeeId' => 900029,
  'invoice' => NULL,
),
            array (
  'id' => 6,
  'requisition_description' => 'svzdfvgfx',
  'quantity' => NULL,
  'vendorId' => 1,
  'branchId' => NULL,
  'status' => 'ACTIVE',
  'created_at' => '2023-08-03 17:47:43',
  'updated_at' => '2023-10-15 16:03:11',
  'employeeId' => 900003,
  'invoice' => NULL,
),
            array (
  'id' => 7,
  'requisition_description' => 'request for the new computer and file',
  'quantity' => 1,
  'vendorId' => NULL,
  'branchId' => 17,
  'status' => 'DELETE',
  'created_at' => '2023-10-16 09:46:13',
  'updated_at' => '2023-10-16 10:18:44',
  'employeeId' => 900029,
  'invoice' => NULL,
)
        ]);
    }
}