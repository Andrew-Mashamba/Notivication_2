<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordPoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_policies', function (Blueprint $table) {
            $table->id();
            $table->string('requireSpecialCharacter')->nullable();
            $table->string('length')->nullable();
            $table->string('requireUppercase')->nullable();
            $table->string('requireNumeric')->nullable();
            $table->string('limiter')->nullable();
            $table->string('passwordExpire')->nullable();
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
        Schema::dropIfExists('password_policies');
    }
}