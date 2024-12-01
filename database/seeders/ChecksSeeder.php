<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChecksSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('checks')->insert([
            array (
  'id' => 1,
  'check_name' => 'Security token',
),
            array (
  'id' => 2,
  'check_name' => 'Check device ID',
),
            array (
  'id' => 3,
  'check_name' => 'Check card IMEI number',
),
            array (
  'id' => 4,
  'check_name' => 'Check device type',
),
            array (
  'id' => 5,
  'check_name' => 'Check institution ID',
),
            array (
  'id' => 6,
  'check_name' => 'Check institution passcode',
),
            array (
  'id' => 7,
  'check_name' => 'Check institution status',
),
            array (
  'id' => 8,
  'check_name' => 'Check IMEI blacklist',
),
            array (
  'id' => 9,
  'check_name' => 'Check device ID blacklist',
),
            array (
  'id' => 10,
  'check_name' => 'Check customer name',
),
            array (
  'id' => 11,
  'check_name' => 'Check customer number',
),
            array (
  'id' => 12,
  'check_name' => 'Check customer passcode',
),
            array (
  'id' => 13,
  'check_name' => 'Check service ID',
),
            array (
  'id' => 14,
  'check_name' => 'Check type of service against user type (customer, institution, system)',
),
            array (
  'id' => 15,
  'check_name' => 'Check service status',
),
            array (
  'id' => 16,
  'check_name' => 'Check customer name blacklist',
),
            array (
  'id' => 17,
  'check_name' => 'Check customer phone number blacklist',
),
            array (
  'id' => 18,
  'check_name' => 'Check customer phone number',
),
            array (
  'id' => 19,
  'check_name' => 'Check frequency of customer name',
),
            array (
  'id' => 20,
  'check_name' => 'Check frequency of customer phone number',
),
            array (
  'id' => 21,
  'check_name' => 'Check frequency of customer number',
),
            array (
  'id' => 22,
  'check_name' => 'Check amount against limits',
),
            array (
  'id' => 23,
  'check_name' => 'Check amount against frequency',
),
            array (
  'id' => 24,
  'check_name' => 'Check duplicate transaction per RRN',
),
            array (
  'id' => 25,
  'check_name' => 'Check duplicate transaction per combined parameters',
),
            array (
  'id' => 26,
  'check_name' => 'Hour of the day check',
),
            array (
  'id' => 27,
  'check_name' => 'Day of the week check',
)
        ]);
    }
}