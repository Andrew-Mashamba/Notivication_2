<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourcesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->insert([
            array (
  'id' => 1,
  'source_name' => 'ADVANCE_SALARY_SYSTEM',
  'source_ip' => '127.0.0.1',
  'source_id' => '2024-08-14',
  'Status' => 'ACTIVE',
  'created_at' => '2024-08-15 03:40:31',
  'updated_at' => '2024-08-15 03:40:31',
)
        ]);
    }
}