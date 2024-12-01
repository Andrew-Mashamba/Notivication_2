<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('nida_number')->nullable();
            $table->string('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('remember_token')->nullable();
            $table->string('current_team_id')->nullable();
            $table->string('profile_photo_path')->nullable();
            $table->string('two_factor_secret')->nullable();
            $table->string('two_factor_recovery_codes')->nullable();
            $table->string('two_factor_confirmed_at')->nullable();
            $table->string('role')->nullable();
            $table->string('status')->nullable();
            $table->string('otp_time')->nullable();
            $table->string('otp')->nullable();
            $table->string('verification_status')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('employeeId')->nullable();
            $table->string('department')->nullable();
            $table->string('branch')->nullable();
            $table->string('institution_id')->nullable();
            $table->string('last_update_password')->nullable();
            $table->string('collateral_manager_id')->nullable();
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
        Schema::dropIfExists('users');
    }
}