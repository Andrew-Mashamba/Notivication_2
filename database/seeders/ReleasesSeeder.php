<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReleasesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('releases')->insert([
            array (
  'id' => 31,
  'application_id' => 38,
  'client_id' => 18,
  'Status' => 'COLLATERAL RELEASED',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 32,
  'application_id' => 39,
  'client_id' => 18,
  'Status' => 'COLLATERAL RELEASED',
  'created_at' => NULL,
  'updated_at' => NULL,
)
        ]);
    }
}