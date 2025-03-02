<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('make_and_model')->nullable();
            $table->string('year_of_manufacture')->nullable();
            $table->string('vin')->nullable();
            $table->string('color')->nullable();
            $table->string('mileage')->nullable();
            $table->string('purchase_price')->nullable();
            $table->string('down_payment')->nullable();
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
        Schema::dropIfExists('items');
    }
}