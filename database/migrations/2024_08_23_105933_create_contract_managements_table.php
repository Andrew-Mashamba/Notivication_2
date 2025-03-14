<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_managements', function (Blueprint $table) {
            $table->id();
            $table->string('contract_name')->nullable();
            $table->string('contract_description')->nullable();
            $table->string('contract_file_path')->nullable();
            $table->string('startDate')->nullable();
            $table->string('endDate')->nullable();
            $table->string('vendorId')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('contract_managements');
    }
}