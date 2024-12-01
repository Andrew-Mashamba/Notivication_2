<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePledgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pledges', function (Blueprint $table) {
            $table->id();
            $table->string('client_id')->nullable();
            $table->string('application_id')->nullable();
            $table->string('commodity_id')->nullable();
            $table->string('loan_id')->nullable();
            $table->string('kilos')->nullable();
            $table->string('amount')->nullable();
            $table->string('Status')->nullable();
            $table->string('interest')->nullable();
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
        Schema::dropIfExists('pledges');
    }
}