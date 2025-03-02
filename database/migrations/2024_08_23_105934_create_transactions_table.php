<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('selected')->nullable();
            $table->string('team_id')->nullable();
            $table->string('service_id')->nullable();
            $table->string('order_id')->nullable();
            $table->string('order_number')->nullable();
            $table->string('source_branch_id')->nullable();
            $table->string('source_branch_name')->nullable();
            $table->string('source_branch_account_number')->nullable();
            $table->string('destination_branch_id')->nullable();
            $table->string('destination_branch_name')->nullable();
            $table->string('destination_branch_account_number')->nullable();
            $table->string('description')->nullable();
            $table->string('transaction_amount')->nullable();
            $table->string('credit')->nullable();
            $table->string('debit')->nullable();
            $table->string('reference_number')->nullable();
            $table->string('month_of_payment')->nullable();
            $table->string('year_of_payment')->nullable();
            $table->string('trans_status')->nullable();
            $table->string('trans_status_description')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('institution')->nullable();
            $table->string('institution_name')->nullable();
            $table->string('beneficiary_nane')->nullable();
            $table->string('typeOfTransfer')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('destination_bank_name')->nullable();
            $table->string('destination_bank_number')->nullable();
            $table->string('ordering_customer')->nullable();
            $table->string('issuer_name')->nullable();
            $table->string('employee_name')->nullable();
            $table->string('sender_name')->nullable();
            $table->string('payment_status')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}