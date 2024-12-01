<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('connection')->nullable();
            $table->string('queue')->nullable();
            $table->string('payload')->nullable();
            $table->string('exception')->nullable();
            $table->string('failed_at')->nullable();
            $table->string('user_id')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('type')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('failed_jobs');
    }
}