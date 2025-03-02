<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            array (
  'id' => 1,
  'institution_id' => '31',
  'status' => 'ACTIVE',
  'department_name' => 'MANAGEMENT',
  'permissions' => '["1","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46"]',
  'description' => 'Management class',
  'updated_at' => '2024-07-27 07:51:45',
  'created_at' => '2023-09-23 14:57:57',
  'modules' => '{"1":"1","2":"2","3":"3","4":"4","5":"5","6":"6","7":"7"}',
),
            array (
  'id' => 10,
  'institution_id' => '31',
  'status' => 'ACTIVE',
  'department_name' => 'ADMINISTRATOR',
  'permissions' => '["1","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46"]',
  'description' => 'Dicta eum voluptatib',
  'updated_at' => '2024-07-18 08:28:35',
  'created_at' => '2023-09-23 14:57:57',
  'modules' => '["2",false,false,false,false,"5",false,"7",false,"9","10",false,false,"13","14",false,false,"17","18","19","20",false,false,"23","24","25","26","27","28",false,"30","31","32",false,false,"35","36",false,false,false,"40","41","42","43","44","45","46"]',
),
            array (
  'id' => 11,
  'institution_id' => '31',
  'status' => 'ACTIVE',
  'department_name' => 'COLLATERAL MANAGER',
  'permissions' => '{"2":"2","3":"3","7":"7"}',
  'description' => NULL,
  'updated_at' => '2024-07-28 07:44:09',
  'created_at' => '2023-09-23 14:57:57',
  'modules' => '{"2":"2","3":"3","7":"7"}',
),
            array (
  'id' => 12,
  'institution_id' => '31',
  'status' => 'ACTIVE',
  'department_name' => 'TRADE FINANCE TEAM',
  'permissions' => '{"3":"3","5":"5","32":"32","33":"33","34":"34","38":false}',
  'description' => NULL,
  'updated_at' => '2024-07-28 07:41:40',
  'created_at' => '2023-09-23 14:57:57',
  'modules' => '{"3":"3","5":"5","32":"32","33":"33","34":"34","38":false}',
),
            array (
  'id' => 13,
  'institution_id' => '31',
  'status' => 'ACTIVE',
  'department_name' => 'CREDIT TEAM',
  'permissions' => '{"15":"15","16":"16","17":"17","18":"18","19":"19","20":"20","21":"21","22":"22","23":"23","24":"24","25":"25"}',
  'description' => NULL,
  'updated_at' => '2024-07-27 14:33:35',
  'created_at' => '2023-09-23 14:57:57',
  'modules' => '{"15":"15","16":"16","17":"17","18":"18","19":"19","20":"20","21":"21","22":"22","23":"23","24":"24","25":"25"}',
),
            array (
  'id' => 14,
  'institution_id' => '31',
  'status' => 'ACTIVE',
  'department_name' => 'RELATIONSHIP MANAGER',
  'permissions' => '{"2":"2","3":"3","5":"5","15":"15","16":"16","17":"17","45":"45","46":"46"}',
  'description' => NULL,
  'updated_at' => '2024-07-28 07:35:02',
  'created_at' => '2023-09-23 14:57:57',
  'modules' => '{"2":"2","3":"3","5":"5","15":"15","16":"16","17":"17","45":"45","46":"46"}',
)
        ]);
    }
}