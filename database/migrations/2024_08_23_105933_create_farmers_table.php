<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('occupation')->nullable();
            $table->string('education_level')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('dependent_count')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('City')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('Status')->nullable();
            $table->string('collateral_manager_id')->nullable();
            $table->string('identificationType')->nullable();
            $table->string('identificationNo')->nullable();
            $table->string('region')->nullable();
            $table->string('district')->nullable();
            $table->string('ward')->nullable();
            $table->string('branch')->nullable();
            $table->string('process')->nullable();
            $table->string('step')->nullable();
            $table->string('xx')->nullable();
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
        Schema::dropIfExists('farmers');
    }
}