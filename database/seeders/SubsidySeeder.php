<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubsidySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subsidy')->insert([
            array (
  'id' => 1,
  'subsidy_id' => 4400,
  'account_name' => 4410,
  'name' => 'Government Conditional Grants',
  'created_at' => '2023-08-09 19:17:18',
  'updated_at' => '2023-08-09 19:17:18',
),
            array (
  'id' => 2,
  'subsidy_id' => 4400,
  'account_name' => 4420,
  'name' => 'conditional grants from private institutions',
  'created_at' => '2023-08-09 19:17:18',
  'updated_at' => '2023-08-09 19:17:18',
),
            array (
  'id' => 3,
  'subsidy_id' => 4400,
  'account_name' => 4430,
  'name' => 'unconditional grants',
  'created_at' => '2023-08-09 19:17:18',
  'updated_at' => '2023-08-09 19:17:18',
),
            array (
  'id' => 4,
  'subsidy_id' => 4400,
  'account_name' => 4440,
  'name' => 'contributions from individuals',
  'created_at' => '2023-08-09 19:17:18',
  'updated_at' => '2023-08-09 19:17:18',
),
            array (
  'id' => 5,
  'subsidy_id' => 4400,
  'account_name' => 4450,
  'name' => 'other contributions',
  'created_at' => '2023-08-09 19:17:18',
  'updated_at' => '2023-08-09 19:17:18',
)
        ]);
    }
}