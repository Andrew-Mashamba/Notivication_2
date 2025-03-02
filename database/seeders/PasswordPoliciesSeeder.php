<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasswordPoliciesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('password_policies')->insert([
            array (
  'id' => 1,
  'requireSpecialCharacter' => 0,
  'length' => '8',
  'requireUppercase' => 0,
  'requireNumeric' => 0,
  'limiter' => 5,
  'passwordExpire' => NULL,
  'status' => 'PENDING',
  'created_at' => '2023-10-09 23:05:05',
  'updated_at' => '2023-10-09 23:05:05',
)
        ]);
    }
}