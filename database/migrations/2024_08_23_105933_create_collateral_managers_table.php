<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollateralManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collateral_managers', function (Blueprint $table) {
            $table->id();
            $table->string('CMNumber')->nullable();
            $table->string('EmailAddress')->nullable();
            $table->string('FirstName')->nullable();
            $table->string('LastName')->nullable();
            $table->string('Address')->nullable();
            $table->string('City')->nullable();
            $table->string('Country')->nullable();
            $table->string('PostalCode')->nullable();
            $table->string('WarehouseLocation')->nullable();
            $table->string('canAddFarmers')->nullable();
            $table->string('canInitiateLoan')->nullable();
            $table->string('canSetPrices')->nullable();
            $table->string('BusinessName')->nullable();
            $table->string('BusinessLicenceNumber')->nullable();
            $table->string('TINNumber')->nullable();
            $table->string('BusinessPhoneNumber')->nullable();
            $table->string('Status')->nullable();
            $table->string('photo')->nullable();
            $table->string('ward')->nullable();
            $table->string('description')->nullable();
            $table->string('District')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collateral_managers');
    }
}