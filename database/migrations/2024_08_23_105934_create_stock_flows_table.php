<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_flows', function (Blueprint $table) {
            $table->id();
            $table->string('inn_kilos')->nullable();
            $table->string('out_kilos')->nullable();
            $table->string('commodit_id')->nullable();
            $table->string('ward_id')->nullable();
            $table->string('desriptions')->nullable();
            $table->string('action_name')->nullable();
            $table->string('collateral_manager_id')->nullable();
            $table->string('price')->nullable();
            $table->string('stock_id')->nullable();
            $table->string('farmer_id')->nullable();
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
        Schema::dropIfExists('stock_flows');
    }
}