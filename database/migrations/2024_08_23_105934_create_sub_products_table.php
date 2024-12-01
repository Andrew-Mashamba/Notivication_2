<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('product_id')->nullable();
            $table->string('default_status')->nullable();
            $table->string('sub_product_name')->nullable();
            $table->string('sub_product_id')->nullable();
            $table->string('sub_product_status')->nullable();
            $table->string('currency')->nullable();
            $table->string('deposit')->nullable();
            $table->string('deposit_charge')->nullable();
            $table->string('deposit_charge_min_value')->nullable();
            $table->string('deposit_charge_max_value')->nullable();
            $table->string('withdraw')->nullable();
            $table->string('withdraw_charge')->nullable();
            $table->string('withdraw_charge_min_value')->nullable();
            $table->string('withdraw_charge_max_value')->nullable();
            $table->string('interest_value')->nullable();
            $table->string('interest_tenure')->nullable();
            $table->string('maintenance_fees')->nullable();
            $table->string('maintenance_fees_value')->nullable();
            $table->string('profit_account')->nullable();
            $table->string('inactivity')->nullable();
            $table->string('create_during_registration')->nullable();
            $table->string('activated_by_lower_limit')->nullable();
            $table->string('requires_approval')->nullable();
            $table->string('generate_atm_card_profile')->nullable();
            $table->string('allow_statement_generation')->nullable();
            $table->string('send_notifications')->nullable();
            $table->string('require_image_member')->nullable();
            $table->string('require_image_id')->nullable();
            $table->string('require_mobile_number')->nullable();
            $table->string('generate_mobile_profile')->nullable();
            $table->string('notes')->nullable();
            $table->string('interest')->nullable();
            $table->string('ledger_fees')->nullable();
            $table->string('ledger_fees_value')->nullable();
            $table->string('total_shares')->nullable();
            $table->string('shares_per_member')->nullable();
            $table->string('nominal_price')->nullable();
            $table->string('shares_allocated')->nullable();
            $table->string('available_shares')->nullable();
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
        Schema::dropIfExists('sub_products');
    }
}