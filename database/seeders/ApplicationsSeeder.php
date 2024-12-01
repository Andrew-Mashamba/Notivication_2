<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applications')->insert([
            array (
  'id' => 38,
  'client_id' => '18',
  'application_status' => 'COLLATERAL RELEASED',
  'approval_status' => 'COMPLETED',
  'tenure' => '12',
  'loan_id' => NULL,
  'loan_amount' => '5000000',
  'interest' => NULL,
  'created_at' => '2024-07-29 06:24:21',
  'updated_at' => '2024-07-29 06:39:05',
  'process' => '15',
  'step' => '3',
),
            array (
  'id' => 39,
  'client_id' => '18',
  'application_status' => 'COLLATERAL RELEASED',
  'approval_status' => 'COMPLETED',
  'tenure' => '12',
  'loan_id' => NULL,
  'loan_amount' => '4000000',
  'interest' => NULL,
  'created_at' => '2024-07-29 07:44:12',
  'updated_at' => '2024-07-29 07:49:33',
  'process' => '15',
  'step' => '3',
)
        ]);
    }
}