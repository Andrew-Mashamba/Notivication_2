<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCatalogSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_catalog')->insert([
            array (
  'id' => 1,
  'fsp_code' => '1001',
  'fsp_name' => 'ACB BANK',
  'product_code' => '4007',
  'product_name' => 'vfbafbfbasfb',
  'min_tenure' => 344,
  'max_tenure' => 343,
  'interest_rate' => 4.0,
  'processing_fee' => 34.0,
  'insurance' => 43.0,
  'amount_min' => 34344.0,
  'amount_max' => 344343.0,
  'repayment_type' => 'Monthly',
  'description' => 'qwrgqwgqwrgwrgqwg',
  'for_executive' => 1,
  'approval_status' => 'PENDING',
  'created_at' => '2023-12-17 16:04:44',
  'updated_at' => '2023-12-17 16:04:44',
),
            array (
  'id' => 2,
  'fsp_code' => '1001',
  'fsp_name' => 'ACB BANK',
  'product_code' => '982765',
  'product_name' => 'asfasfasf',
  'min_tenure' => 34,
  'max_tenure' => 4,
  'interest_rate' => 4.0,
  'processing_fee' => 4.0,
  'insurance' => 3.0,
  'amount_min' => 4343.0,
  'amount_max' => 343434.0,
  'repayment_type' => 'Monthly',
  'description' => 'rgwergwergwerge',
  'for_executive' => 1,
  'approval_status' => 'PENDING',
  'created_at' => '2023-12-17 16:11:29',
  'updated_at' => '2023-12-17 16:11:29',
),
            array (
  'id' => 3,
  'fsp_code' => '1001',
  'fsp_name' => 'ACB BANK',
  'product_code' => '172773',
  'product_name' => 'dfvefvefv',
  'min_tenure' => 3,
  'max_tenure' => 4,
  'interest_rate' => 3.0,
  'processing_fee' => 1.0,
  'insurance' => 4.0,
  'amount_min' => 4.0,
  'amount_max' => 3.0,
  'repayment_type' => 'Monthly',
  'description' => 'gbsdfvfvefve fveverve erv1rvrv3r',
  'for_executive' => 1,
  'approval_status' => 'PENDING',
  'created_at' => '2023-12-17 16:17:56',
  'updated_at' => '2023-12-17 16:17:56',
),
            array (
  'id' => 4,
  'fsp_code' => '1001',
  'fsp_name' => 'ACB BANK',
  'product_code' => '172773',
  'product_name' => 'dfvefvefv',
  'min_tenure' => 3,
  'max_tenure' => 4,
  'interest_rate' => 3.0,
  'processing_fee' => 1.0,
  'insurance' => 4.0,
  'amount_min' => 4.0,
  'amount_max' => 3.0,
  'repayment_type' => 'Monthly',
  'description' => NULL,
  'for_executive' => 1,
  'approval_status' => 'PENDING',
  'created_at' => '2023-12-17 16:19:02',
  'updated_at' => '2023-12-17 16:19:02',
),
            array (
  'id' => 5,
  'fsp_code' => '1001',
  'fsp_name' => 'ACB BANK',
  'product_code' => '172773',
  'product_name' => 'dfvefvefv',
  'min_tenure' => 3,
  'max_tenure' => 4,
  'interest_rate' => 3.0,
  'processing_fee' => 1.0,
  'insurance' => 4.0,
  'amount_min' => 4.0,
  'amount_max' => 3.0,
  'repayment_type' => 'Monthly',
  'description' => NULL,
  'for_executive' => 1,
  'approval_status' => 'PENDING',
  'created_at' => '2023-12-17 16:20:12',
  'updated_at' => '2023-12-17 16:20:12',
)
        ]);
    }
}