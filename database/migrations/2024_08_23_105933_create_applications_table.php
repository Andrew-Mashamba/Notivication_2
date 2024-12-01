<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('client_id')->nullable();
            $table->string('application_status')->nullable();
            $table->string('approval_status')->nullable();
            $table->string('tenure')->nullable();
            $table->string('loan_id')->nullable();
            $table->string('loan_amount')->nullable();
            $table->string('interest')->nullable();
            $table->string('process')->nullable();
            $table->string('step')->nullable();
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
        Schema::dropIfExists('applications');
    }
}