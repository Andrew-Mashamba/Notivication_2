<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnelExpensesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnel_expenses')->insert([
            array (
  'id' => 1,
  'category_code' => '5100',
  'sub_category_code' => '5110',
  'sub_category_name' => 'staff_salaries',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 2,
  'category_code' => '5100',
  'sub_category_code' => '5112',
  'sub_category_name' => 'social_security_contributions',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 3,
  'category_code' => '5100',
  'sub_category_code' => '5114',
  'sub_category_name' => 'payroll_taxes',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 4,
  'category_code' => '5100',
  'sub_category_code' => '5116',
  'sub_category_name' => 'staff_training',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 5,
  'category_code' => '5100',
  'sub_category_code' => '5118',
  'sub_category_name' => 'leave_and_transfer',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 6,
  'category_code' => '5100',
  'sub_category_code' => '5120',
  'sub_category_name' => 'accrued_salary',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 7,
  'category_code' => '5100',
  'sub_category_code' => '5122',
  'sub_category_name' => 'internal_travel_expenses',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 8,
  'category_code' => '5100',
  'sub_category_code' => '5124',
  'sub_category_name' => 'back_pay',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 9,
  'category_code' => '5100',
  'sub_category_code' => '5126',
  'sub_category_name' => 'out_of_hours_payments',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 10,
  'category_code' => '5100',
  'sub_category_code' => '5128',
  'sub_category_name' => 'employee_incentives',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 11,
  'category_code' => '5100',
  'sub_category_code' => '5130',
  'sub_category_name' => 'responsibility_allowance',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 12,
  'category_code' => '5100',
  'sub_category_code' => '5132',
  'sub_category_name' => 'housing_allowance',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 13,
  'category_code' => '5100',
  'sub_category_code' => '5134',
  'sub_category_name' => 'transport_allowance',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 14,
  'category_code' => '5100',
  'sub_category_code' => '5136',
  'sub_category_name' => 'medical_allowance',
  'created_at' => NULL,
  'updated_at' => NULL,
),
            array (
  'id' => 15,
  'category_code' => '5100',
  'sub_category_code' => '5138',
  'sub_category_name' => 'food_allowance',
  'created_at' => NULL,
  'updated_at' => NULL,
)
        ]);
    }
}