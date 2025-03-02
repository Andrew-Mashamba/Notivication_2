<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OffersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert([
            array (
  'id' => 12,
  'loan_id' => NULL,
  'client_id' => NULL,
  'application_id' => 6,
  'principle' => '90000000',
  'interest' => '3',
  'tenure' => '6',
  'interest_method' => NULL,
  'make_and_model' => NULL,
  'purchase_price' => NULL,
  'schedule' => NULL,
  'offer_status' => 'ACCEPTED',
  'created_at' => '2024-02-08 17:05:28',
  'updated_at' => '2024-02-08 18:46:46',
),
            array (
  'id' => 13,
  'loan_id' => NULL,
  'client_id' => NULL,
  'application_id' => 5,
  'principle' => '12000000',
  'interest' => '8',
  'tenure' => '24',
  'interest_method' => 'decline_balance',
  'make_and_model' => NULL,
  'purchase_price' => NULL,
  'schedule' => NULL,
  'offer_status' => 'ACCEPTED',
  'created_at' => '2024-02-08 17:36:04',
  'updated_at' => '2024-02-10 16:53:44',
),
            array (
  'id' => 14,
  'loan_id' => NULL,
  'client_id' => NULL,
  'application_id' => 14,
  'principle' => '7000',
  'interest' => '6',
  'tenure' => '12',
  'interest_method' => 'decline_balance',
  'make_and_model' => NULL,
  'purchase_price' => NULL,
  'schedule' => NULL,
  'offer_status' => 'ACCEPTED',
  'created_at' => '2024-02-10 13:56:33',
  'updated_at' => '2024-02-10 13:56:50',
),
            array (
  'id' => 15,
  'loan_id' => NULL,
  'client_id' => NULL,
  'application_id' => 17,
  'principle' => '5000',
  'interest' => '8',
  'tenure' => '3',
  'interest_method' => 'decline_balance',
  'make_and_model' => NULL,
  'purchase_price' => NULL,
  'schedule' => NULL,
  'offer_status' => 'ACCEPTED',
  'created_at' => '2024-02-10 18:47:33',
  'updated_at' => '2024-02-10 18:48:19',
),
            array (
  'id' => 16,
  'loan_id' => NULL,
  'client_id' => NULL,
  'application_id' => 18,
  'principle' => '10000000',
  'interest' => '4',
  'tenure' => '12',
  'interest_method' => 'decline_balance',
  'make_and_model' => NULL,
  'purchase_price' => NULL,
  'schedule' => NULL,
  'offer_status' => 'ACCEPTED',
  'created_at' => '2024-02-11 12:40:22',
  'updated_at' => '2024-02-11 12:43:04',
),
            array (
  'id' => 17,
  'loan_id' => NULL,
  'client_id' => NULL,
  'application_id' => 19,
  'principle' => '33000000',
  'interest' => '6',
  'tenure' => '18',
  'interest_method' => 'decline_balance',
  'make_and_model' => NULL,
  'purchase_price' => NULL,
  'schedule' => NULL,
  'offer_status' => 'ACCEPTED',
  'created_at' => '2024-02-12 16:23:58',
  'updated_at' => '2024-02-12 16:32:06',
),
            array (
  'id' => 18,
  'loan_id' => NULL,
  'client_id' => NULL,
  'application_id' => 20,
  'principle' => '70000000',
  'interest' => '8',
  'tenure' => '12',
  'interest_method' => 'decline_balance',
  'make_and_model' => NULL,
  'purchase_price' => NULL,
  'schedule' => NULL,
  'offer_status' => 'ACCEPTED',
  'created_at' => '2024-02-13 06:15:59',
  'updated_at' => '2024-02-13 06:16:14',
),
            array (
  'id' => 19,
  'loan_id' => NULL,
  'client_id' => NULL,
  'application_id' => 21,
  'principle' => '23000000',
  'interest' => '8',
  'tenure' => '12',
  'interest_method' => 'decline_balance',
  'make_and_model' => NULL,
  'purchase_price' => NULL,
  'schedule' => NULL,
  'offer_status' => 'ACCEPTED',
  'created_at' => '2024-02-13 08:02:43',
  'updated_at' => '2024-02-13 08:03:05',
),
            array (
  'id' => 20,
  'loan_id' => NULL,
  'client_id' => NULL,
  'application_id' => 22,
  'principle' => '100000000',
  'interest' => '8',
  'tenure' => '12',
  'interest_method' => 'decline_balance',
  'make_and_model' => NULL,
  'purchase_price' => NULL,
  'schedule' => NULL,
  'offer_status' => 'ACCEPTED',
  'created_at' => '2024-02-13 08:13:31',
  'updated_at' => '2024-02-13 08:13:42',
),
            array (
  'id' => 21,
  'loan_id' => NULL,
  'client_id' => NULL,
  'application_id' => 23,
  'principle' => '700',
  'interest' => '8',
  'tenure' => '12',
  'interest_method' => 'decline_balance',
  'make_and_model' => NULL,
  'purchase_price' => NULL,
  'schedule' => NULL,
  'offer_status' => 'ACCEPTED',
  'created_at' => '2024-02-13 09:08:33',
  'updated_at' => '2024-02-13 09:08:50',
),
            array (
  'id' => 22,
  'loan_id' => NULL,
  'client_id' => NULL,
  'application_id' => 24,
  'principle' => '200000',
  'interest' => '4',
  'tenure' => '10',
  'interest_method' => 'decline_balance',
  'make_and_model' => NULL,
  'purchase_price' => NULL,
  'schedule' => NULL,
  'offer_status' => 'APPROVED',
  'created_at' => '2024-02-13 09:59:22',
  'updated_at' => '2024-02-13 09:59:22',
),
            array (
  'id' => 23,
  'loan_id' => NULL,
  'client_id' => NULL,
  'application_id' => 24,
  'principle' => '200000',
  'interest' => '4',
  'tenure' => '10',
  'interest_method' => 'decline_balance',
  'make_and_model' => NULL,
  'purchase_price' => NULL,
  'schedule' => NULL,
  'offer_status' => 'APPROVED',
  'created_at' => '2024-02-13 09:59:47',
  'updated_at' => '2024-02-13 09:59:47',
),
            array (
  'id' => 24,
  'loan_id' => NULL,
  'client_id' => NULL,
  'application_id' => 24,
  'principle' => '200000',
  'interest' => '4',
  'tenure' => '10',
  'interest_method' => 'decline_balance',
  'make_and_model' => NULL,
  'purchase_price' => NULL,
  'schedule' => NULL,
  'offer_status' => 'ACCEPTED',
  'created_at' => '2024-02-13 10:00:13',
  'updated_at' => '2024-02-13 10:09:50',
)
        ]);
    }
}