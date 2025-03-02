<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notifications')->insert([
            array (
  'id' => 11,
  'source_id' => 'source123',
  'subscriber_id' => '255714140412',
  'service_id' => 'service123',
  'message' => 'Mr Abdul, Your loan repayment is due on 8/18/2024',
  'provider_id' => 'provider123',
  'rrn' => '631622487',
  'third_part_rnn' => NULL,
  'provider_responce' => 'OK',
  'provider_responce_code' => '0',
  'network_response_code' => NULL,
  'network_error_response_code' => NULL,
  'network_error_message' => NULL,
  'no_retrials' => NULL,
  'no_resends' => NULL,
  'body_string_lenght' => NULL,
  'security_check_code' => NULL,
  'security_check_message' => NULL,
  'send_status' => 'sent',
  'receipt_status' => NULL,
  'general_status' => '37475.7599',
  'status' => NULL,
  'created_at' => '2024-08-16 13:26:49',
  'updated_at' => '2024-08-16 13:26:49',
),
            array (
  'id' => 12,
  'source_id' => 'source123',
  'subscriber_id' => '255757330260',
  'service_id' => 'service123',
  'message' => 'Mr Edwin, Your loan repayment is due on 8/18/2024',
  'provider_id' => 'provider123',
  'rrn' => '631623741',
  'third_part_rnn' => NULL,
  'provider_responce' => 'OK',
  'provider_responce_code' => '0',
  'network_response_code' => NULL,
  'network_error_response_code' => NULL,
  'network_error_message' => NULL,
  'no_retrials' => NULL,
  'no_resends' => NULL,
  'body_string_lenght' => NULL,
  'security_check_code' => NULL,
  'security_check_message' => NULL,
  'send_status' => 'sent',
  'receipt_status' => NULL,
  'general_status' => '37445.7599',
  'status' => NULL,
  'created_at' => '2024-08-16 13:30:03',
  'updated_at' => '2024-08-16 13:30:04',
),
            array (
  'id' => 13,
  'source_id' => 'source123',
  'subscriber_id' => '255754509579',
  'service_id' => 'service123',
  'message' => 'Mr Edwin, Your loan repayment is due on 8/18/2024',
  'provider_id' => 'provider123',
  'rrn' => '631624200',
  'third_part_rnn' => NULL,
  'provider_responce' => 'OK',
  'provider_responce_code' => '0',
  'network_response_code' => NULL,
  'network_error_response_code' => NULL,
  'network_error_message' => NULL,
  'no_retrials' => NULL,
  'no_resends' => NULL,
  'body_string_lenght' => NULL,
  'security_check_code' => NULL,
  'security_check_message' => NULL,
  'send_status' => 'sent',
  'receipt_status' => NULL,
  'general_status' => '37435.7599',
  'status' => NULL,
  'created_at' => '2024-08-16 13:31:07',
  'updated_at' => '2024-08-16 13:31:07',
),
            array (
  'id' => 14,
  'source_id' => 'source123',
  'subscriber_id' => '255692410353',
  'service_id' => 'service123',
  'message' => 'Mr Edwin, Your loan repayment is due on 8/18/2024',
  'provider_id' => 'provider123',
  'rrn' => '631624569',
  'third_part_rnn' => NULL,
  'provider_responce' => 'OK',
  'provider_responce_code' => '0',
  'network_response_code' => NULL,
  'network_error_response_code' => NULL,
  'network_error_message' => NULL,
  'no_retrials' => NULL,
  'no_resends' => NULL,
  'body_string_lenght' => NULL,
  'security_check_code' => NULL,
  'security_check_message' => NULL,
  'send_status' => 'sent',
  'receipt_status' => NULL,
  'general_status' => '37425.7599',
  'status' => NULL,
  'created_at' => '2024-08-16 13:32:07',
  'updated_at' => '2024-08-16 13:32:07',
)
        ]);
    }
}