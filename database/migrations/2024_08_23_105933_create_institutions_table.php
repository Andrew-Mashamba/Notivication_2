<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->string('institution_id')->nullable();
            $table->string('name')->nullable();
            $table->string('region')->nullable();
            $table->string('wilaya')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('institution_status')->nullable();
            $table->string('imgUrl')->nullable();
            $table->string('admin')->nullable();
            $table->string('available_shares')->nullable();
            $table->string('registration_fees')->nullable();
            $table->string('min_shares')->nullable();
            $table->string('initial_shares')->nullable();
            $table->string('temp_shares_holding_account')->nullable();
            $table->string('value_per_share')->nullable();
            $table->string('selected')->nullable();
            $table->string('inactivity')->nullable();
            $table->string('allocated_shares')->nullable();
            $table->string('admin_email')->nullable();
            $table->string('manager_email')->nullable();
            $table->string('tin_number')->nullable();
            $table->string('tcdc_form')->nullable();
            $table->string('microfinance_license')->nullable();
            $table->string('status')->nullable();
            $table->string('notes')->nullable();
            $table->string('manager_image_url')->nullable();
            $table->string('manager_full_name')->nullable();
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
        Schema::dropIfExists('institutions');
    }
}