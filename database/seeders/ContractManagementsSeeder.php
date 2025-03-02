<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContractManagementsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contract_managements')->insert([
            array (
  'id' => 3,
  'contract_name' => 'WAZAWA',
  'contract_description' => 'DESCRIPTIONS',
  'contract_file_path' => 'procurementContract/1697451854_98259aa7-f5af-4145-ae28-40abfb24f282.pdf',
  'startDate' => '2023-10-18 00:00:00',
  'endDate' => '2023-12-22 00:00:00',
  'vendorId' => 1,
  'created_at' => '2023-10-16 10:24:14',
  'updated_at' => '2023-10-16 10:24:14',
  'status' => 'PENDING',
)
        ]);
    }
}