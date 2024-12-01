<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContributionsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contributions')->insert([
            array (
  'id' => 1,
  'name' => ' CONTRIBUTION',
  'amount' => 50000.0,
  'updated_at' => '2023-07-24 09:45:36',
  'created_at' => '2023-07-24 09:45:36',
  'status' => '',
),
            array (
  'id' => 2,
  'name' => 'category name',
  'amount' => 40000.0,
  'updated_at' => '2023-07-24 10:33:55',
  'created_at' => '2023-07-24 10:33:55',
  'status' => 'PENDING',
)
        ]);
    }
}