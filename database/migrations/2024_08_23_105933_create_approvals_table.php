<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvals', function (Blueprint $table) {
            $table->id();
            $table->string('institution')->nullable();
            $table->string('process_name')->nullable();
            $table->string('process_description')->nullable();
            $table->string('approval_process_description')->nullable();
            $table->string('process_code')->nullable();
            $table->string('process_id')->nullable();
            $table->string('process_status')->nullable();
            $table->string('user_id')->nullable();
            $table->string('approver_id')->nullable();
            $table->string('team_id')->nullable();
            $table->string('edit_package')->nullable();
            $table->string('clearance')->nullable();
            $table->string('approval_status')->nullable();
            $table->string('reset_email')->nullable();
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
        Schema::dropIfExists('approvals');
    }
}