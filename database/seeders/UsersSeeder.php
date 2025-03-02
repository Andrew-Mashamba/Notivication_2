<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            array (
  'id' => 32,
  'name' => 'ADMIN',
  'email' => 'admin@gmail.com',
  'nida_number' => 94984284248242,
  'email_verified_at' => NULL,
  'password' => '$2y$10$ehEE6ZXyBweJ0G2eU4u.GerUqMsrkc6o1FtmLbRgL0BbYH4woEk32',
  'remember_token' => NULL,
  'current_team_id' => NULL,
  'profile_photo_path' => NULL,
  'created_at' => '2023-08-13 14:35:20',
  'updated_at' => '2024-07-02 16:22:39',
  'two_factor_secret' => NULL,
  'two_factor_recovery_codes' => NULL,
  'two_factor_confirmed_at' => NULL,
  'role' => '10',
  'status' => 'ACTIVE',
  'otp_time' => '16:22:39',
  'otp' => 111111,
  'verification_status' => '0',
  'phone_number' => '0767582817',
  'employeeId' => 900029,
  'department' => 1,
  'branch' => 25,
  'institution_id' => 8,
  'last_update_password' => '2023-11-24 08:06:15',
  'collateral_manager_id' => NULL,
),
            array (
  'id' => 58,
  'name' => 'Andrew',
  'email' => 'andrew.s.mashamba@gmail.com',
  'nida_number' => NULL,
  'email_verified_at' => NULL,
  'password' => '$2y$10$ehEE6ZXyBweJ0G2eU4u.GerUqMsrkc6o1FtmLbRgL0BbYH4woEk32',
  'remember_token' => NULL,
  'current_team_id' => NULL,
  'profile_photo_path' => NULL,
  'created_at' => NULL,
  'updated_at' => NULL,
  'two_factor_secret' => NULL,
  'two_factor_recovery_codes' => NULL,
  'two_factor_confirmed_at' => NULL,
  'role' => NULL,
  'status' => 'ACTIVE',
  'otp_time' => NULL,
  'otp' => NULL,
  'verification_status' => '0',
  'phone_number' => NULL,
  'employeeId' => NULL,
  'department' => 1,
  'branch' => 25,
  'institution_id' => NULL,
  'last_update_password' => '2024-07-29 05:21:38',
  'collateral_manager_id' => 24,
)
        ]);
    }
}