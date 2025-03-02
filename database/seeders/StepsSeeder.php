<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StepsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('steps')->insert([
            array (
  'id' => 26,
  'process_id' => 14,
  'role_id' => '14',
  'step_name' => 'ONBOADING',
  'step_number' => '1',
  'created_at' => '2024-07-28 07:35:02',
  'updated_at' => '2024-07-28 07:35:02',
),
            array (
  'id' => 27,
  'process_id' => 14,
  'role_id' => '12',
  'step_name' => 'CLIENT REVIEW',
  'step_number' => '2',
  'created_at' => '2024-07-28 07:41:40',
  'updated_at' => '2024-07-28 07:41:40',
),
            array (
  'id' => 28,
  'process_id' => 14,
  'role_id' => '11',
  'step_name' => 'STOCK REGISTRATION',
  'step_number' => '3',
  'created_at' => '2024-07-28 07:44:09',
  'updated_at' => '2024-07-28 07:44:09',
),
            array (
  'id' => 29,
  'process_id' => 15,
  'role_id' => '14',
  'step_name' => 'LOAN APPLICATION',
  'step_number' => '1',
  'created_at' => '2024-07-28 11:48:32',
  'updated_at' => '2024-07-28 11:48:32',
),
            array (
  'id' => 30,
  'process_id' => 15,
  'role_id' => '12',
  'step_name' => 'LOAN APPLICATION REVIEW',
  'step_number' => '2',
  'created_at' => '2024-07-28 11:52:52',
  'updated_at' => '2024-07-28 11:52:52',
),
            array (
  'id' => 31,
  'process_id' => 15,
  'role_id' => '13',
  'step_name' => 'LOAN APPLICATION ANALYSIS',
  'step_number' => '3',
  'created_at' => '2024-07-28 11:55:09',
  'updated_at' => '2024-07-28 11:55:09',
),
            array (
  'id' => 32,
  'process_id' => 16,
  'role_id' => '14',
  'step_name' => 'COLLATERAL RELEASE REQUEST',
  'step_number' => '1',
  'created_at' => '2024-07-28 12:08:12',
  'updated_at' => '2024-07-28 12:08:12',
),
            array (
  'id' => 33,
  'process_id' => 16,
  'role_id' => '12',
  'step_name' => 'REVIEW COLLATERAL RELEASE REQUEST',
  'step_number' => '2',
  'created_at' => '2024-07-28 12:10:21',
  'updated_at' => '2024-07-28 12:10:21',
),
            array (
  'id' => 34,
  'process_id' => 16,
  'role_id' => '13',
  'step_name' => 'COLLATERAL RELEASE APPROVAL',
  'step_number' => '3',
  'created_at' => '2024-07-28 12:16:26',
  'updated_at' => '2024-07-28 12:16:26',
),
            array (
  'id' => 35,
  'process_id' => 17,
  'role_id' => '10',
  'step_name' => 'SYSTEM MANAGEMENT',
  'step_number' => '1',
  'created_at' => '2024-07-28 22:55:42',
  'updated_at' => '2024-07-28 22:55:42',
)
        ]);
    }
}