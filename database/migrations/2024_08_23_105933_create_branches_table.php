<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('institution_id')->nullable();
            $table->string('name')->nullable();
            $table->string('region')->nullable();
            $table->string('ward')->nullable();
            $table->string('district')->nullable();
            $table->string('branchNumber')->nullable();
            $table->string('parentBranch')->nullable();
            $table->string('monthly_disbursement_amount')->nullable();
            $table->string('amount_owed')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('automatic_payments')->nullable();
            $table->string('branch_status')->nullable();
            $table->string('Status')->nullable();
            $table->string('selected')->nullable();
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
        Schema::dropIfExists('branches');
    }
}