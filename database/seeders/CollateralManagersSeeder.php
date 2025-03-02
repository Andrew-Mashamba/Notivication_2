<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollateralManagersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collateral_managers')->insert([
            array (
  'id' => 23,
  'CMNumber' => '67676',
  'EmailAddress' => 'andrew.s.mashamba@gmail.com',
  'FirstName' => 'Andrew',
  'LastName' => 'Mashamba',
  'Address' => 'Namanga Rd',
  'City' => '2',
  'Country' => 'Tanzania',
  'PostalCode' => NULL,
  'WarehouseLocation' => '',
  'canAddFarmers' => 0,
  'canInitiateLoan' => 0,
  'canSetPrices' => 0,
  'BusinessName' => 'FastCredit',
  'BusinessLicenceNumber' => 'FastCredit',
  'TINNumber' => 'Numquam sunt eiusmo',
  'BusinessPhoneNumber' => '0692410353',
  'Status' => 'PENDING',
  'photo' => NULL,
  'created_at' => '2024-07-20 15:10:40',
  'updated_at' => '2024-07-20 15:10:40',
  'ward' => NULL,
  'description' => NULL,
  'District' => '8',
  'PhoneNumber' => NULL,
),
            array (
  'id' => 24,
  'CMNumber' => '594055',
  'EmailAddress' => 'andrew.s.mashamba@gmail.com',
  'FirstName' => 'Andrew',
  'LastName' => 'Mashamba',
  'Address' => 'Namanga Rd , Mambo leo',
  'City' => '17',
  'Country' => 'Tanzania',
  'PostalCode' => NULL,
  'WarehouseLocation' => '',
  'canAddFarmers' => 0,
  'canInitiateLoan' => 0,
  'canSetPrices' => 0,
  'BusinessName' => 'GREEN FIELDS LTD',
  'BusinessLicenceNumber' => '565565767',
  'TINNumber' => '54464656',
  'BusinessPhoneNumber' => '0692410353',
  'Status' => 'PENDING',
  'photo' => NULL,
  'created_at' => '2024-07-29 02:21:37',
  'updated_at' => '2024-07-29 02:21:37',
  'ward' => NULL,
  'description' => NULL,
  'District' => '112',
  'PhoneNumber' => 'Quidem qui quis iust',
),
            array (
  'id' => 25,
  'CMNumber' => '421144',
  'EmailAddress' => 'cm@gmail.com',
  'FirstName' => 'Aut tempore minus q',
  'LastName' => 'Do mollit aut aspern',
  'Address' => 'Exercitation nisi ma',
  'City' => '13',
  'Country' => 'Tanzania',
  'PostalCode' => NULL,
  'WarehouseLocation' => '',
  'canAddFarmers' => 0,
  'canInitiateLoan' => 0,
  'canSetPrices' => 0,
  'BusinessName' => 'BLUE ORIGIN LTD',
  'BusinessLicenceNumber' => 'Duis dolores ut cupi',
  'TINNumber' => 'Quia aut nihil ut pr',
  'BusinessPhoneNumber' => 'Et ipsum numquam ac',
  'Status' => 'PENDING',
  'photo' => NULL,
  'created_at' => '2024-07-29 02:30:38',
  'updated_at' => '2024-07-29 02:30:38',
  'ward' => NULL,
  'description' => NULL,
  'District' => '81',
  'PhoneNumber' => 'Facilis aute minima ',
),
            array (
  'id' => 26,
  'CMNumber' => '907402',
  'EmailAddress' => 'cm2@gmail.com',
  'FirstName' => 'Omnis quo repudianda',
  'LastName' => 'Earum veritatis non ',
  'Address' => 'Molestias fuga Quam',
  'City' => '16',
  'Country' => 'Tanzania',
  'PostalCode' => NULL,
  'WarehouseLocation' => '',
  'canAddFarmers' => 0,
  'canInitiateLoan' => 0,
  'canSetPrices' => 0,
  'BusinessName' => 'BLACK WOOD LTD',
  'BusinessLicenceNumber' => 'Provident numquam s',
  'TINNumber' => 'Minima nulla non atq',
  'BusinessPhoneNumber' => 'Et minim et ullam eo',
  'Status' => 'PENDING',
  'photo' => NULL,
  'created_at' => '2024-07-29 03:08:44',
  'updated_at' => '2024-07-29 03:08:44',
  'ward' => NULL,
  'description' => NULL,
  'District' => '105',
  'PhoneNumber' => 'Praesentium qui qui ',
)
        ]);
    }
}