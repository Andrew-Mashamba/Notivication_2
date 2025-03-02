<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscribersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscribers')->insert([
            array (
  'id' => 1,
  'subscriber_name' => 'ANDREW MASHAMBA',
  'subscriber_phone_number' => '0754244888',
  'subscriber_email' => 'andrew.s.mashamba@gmail.com',
  'subscribers_id' => NULL,
  'source_id' => '1',
  'Status' => 'ACTIVE',
  'created_at' => '2024-08-15 06:30:59',
  'updated_at' => '2024-08-15 06:30:59',
),
            array (
  'id' => 2,
  'subscriber_name' => 'PERCY EGNO',
  'subscriber_phone_number' => '255624451311',
  'subscriber_email' => 'percyegno@gmail.com',
  'subscribers_id' => NULL,
  'source_id' => '1',
  'Status' => 'ACTIVE',
  'created_at' => '2024-08-15 15:18:53',
  'updated_at' => '2024-08-15 15:18:53',
)
        ]);
    }
}