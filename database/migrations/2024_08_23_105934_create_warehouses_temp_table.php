<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousesTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses_temp', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->nullable();
            $table->string('warehouse_name')->nullable();
            $table->string('warehouse_description')->nullable();
            $table->string('location_address')->nullable();
            $table->string('location_coordinates')->nullable();
            $table->string('iso3166')->nullable();
            $table->string('amenity')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('country_code')->nullable();
            $table->string('postcode')->nullable();
            $table->string('region')->nullable();
            $table->string('road')->nullable();
            $table->string('suburb')->nullable();
            $table->string('ward')->nullable();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('warehouses_temp');
    }
}