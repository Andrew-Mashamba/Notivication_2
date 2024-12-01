<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            array (
  'id' => 1,
  'application_id' => 28,
  'user_id' => 32,
  'comment_text' => 'This is good',
  'created_at' => '2024-07-22 13:49:35',
  'updated_at' => '2024-07-22 13:49:35',
),
            array (
  'id' => 2,
  'application_id' => 28,
  'user_id' => 32,
  'comment_text' => 'Application date is ok',
  'created_at' => '2024-07-22 16:25:59',
  'updated_at' => '2024-07-22 16:25:59',
),
            array (
  'id' => 3,
  'application_id' => 31,
  'user_id' => 32,
  'comment_text' => 'Yes ok',
  'created_at' => '2024-07-22 16:26:30',
  'updated_at' => '2024-07-22 16:26:30',
),
            array (
  'id' => 4,
  'application_id' => 32,
  'user_id' => 32,
  'comment_text' => 'Hello',
  'created_at' => '2024-07-22 17:56:06',
  'updated_at' => '2024-07-22 17:56:06',
),
            array (
  'id' => 5,
  'application_id' => 33,
  'user_id' => 32,
  'comment_text' => 'Ok',
  'created_at' => '2024-07-22 18:12:59',
  'updated_at' => '2024-07-22 18:12:59',
),
            array (
  'id' => 6,
  'application_id' => 31,
  'user_id' => 32,
  'comment_text' => 'GHBJH',
  'created_at' => '2024-07-23 06:50:20',
  'updated_at' => '2024-07-23 06:50:20',
),
            array (
  'id' => 7,
  'application_id' => 36,
  'user_id' => 32,
  'comment_text' => 'To be reviewed',
  'created_at' => '2024-07-29 05:28:50',
  'updated_at' => '2024-07-29 05:28:50',
),
            array (
  'id' => 8,
  'application_id' => 39,
  'user_id' => 32,
  'comment_text' => 'Done',
  'created_at' => '2024-07-29 07:45:50',
  'updated_at' => '2024-07-29 07:45:50',
),
            array (
  'id' => 9,
  'application_id' => 39,
  'user_id' => 32,
  'comment_text' => 'Ok',
  'created_at' => '2024-07-29 07:46:28',
  'updated_at' => '2024-07-29 07:46:28',
)
        ]);
    }
}