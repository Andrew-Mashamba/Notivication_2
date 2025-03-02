<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('commodity_id')->nullable();
            $table->string('client_id')->nullable();
            $table->string('kilos')->nullable();
            $table->string('value')->nullable();
            $table->string('pledged_kilos')->nullable();
            $table->string('available_kilos')->nullable();
            $table->string('price_per_kilo')->nullable();
            $table->string('collateral_manager_id')->nullable();
            $table->string('status')->nullable();
            $table->string('ward_location')->nullable();
            $table->string('warehouse')->nullable();
            $table->string('warehouses_temp')->nullable();
            $table->string('unit')->nullable();
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
        Schema::dropIfExists('stocks');
    }
}