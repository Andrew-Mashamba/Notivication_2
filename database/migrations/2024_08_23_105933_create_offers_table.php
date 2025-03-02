<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('loan_id')->nullable();
            $table->string('client_id')->nullable();
            $table->string('application_id')->nullable();
            $table->string('principle')->nullable();
            $table->string('interest')->nullable();
            $table->string('tenure')->nullable();
            $table->string('interest_method')->nullable();
            $table->string('make_and_model')->nullable();
            $table->string('purchase_price')->nullable();
            $table->string('schedule')->nullable();
            $table->string('offer_status')->nullable();
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
        Schema::dropIfExists('offers');
    }
}