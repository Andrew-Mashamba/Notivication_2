<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCatalogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_catalog', function (Blueprint $table) {
            $table->id();
            $table->string('fsp_code')->nullable();
            $table->string('fsp_name')->nullable();
            $table->string('product_code')->nullable();
            $table->string('product_name')->nullable();
            $table->string('min_tenure')->nullable();
            $table->string('max_tenure')->nullable();
            $table->string('interest_rate')->nullable();
            $table->string('processing_fee')->nullable();
            $table->string('insurance')->nullable();
            $table->string('amount_min')->nullable();
            $table->string('amount_max')->nullable();
            $table->string('repayment_type')->nullable();
            $table->string('description')->nullable();
            $table->string('for_executive')->nullable();
            $table->string('approval_status')->nullable();
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
        Schema::dropIfExists('product_catalog');
    }
}