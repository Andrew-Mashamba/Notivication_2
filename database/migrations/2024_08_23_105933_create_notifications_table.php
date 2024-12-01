<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('source_id')->nullable();
            $table->string('subscriber_id')->nullable();
            $table->string('service_id')->nullable();
            $table->string('message')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('rrn')->nullable();
            $table->string('third_part_rnn')->nullable();
            $table->string('provider_responce')->nullable();
            $table->string('provider_responce_code')->nullable();
            $table->string('network_response_code')->nullable();
            $table->string('network_error_response_code')->nullable();
            $table->string('network_error_message')->nullable();
            $table->string('no_retrials')->nullable();
            $table->string('no_resends')->nullable();
            $table->string('body_string_lenght')->nullable();
            $table->string('security_check_code')->nullable();
            $table->string('security_check_message')->nullable();
            $table->string('send_status')->nullable();
            $table->string('receipt_status')->nullable();
            $table->string('general_status')->nullable();
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
        Schema::dropIfExists('notifications');
    }
}