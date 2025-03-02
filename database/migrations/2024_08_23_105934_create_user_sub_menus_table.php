<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSubMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sub_menus', function (Blueprint $table) {
            $table->id();
            $table->string('ID')->nullable();
            $table->string('user_id')->nullable();
            $table->string('menu_id')->nullable();
            $table->string('sub_menu_id')->nullable();
            $table->string('permission')->nullable();
            $table->string('updated')->nullable();
            $table->string('previous')->nullable();
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
        Schema::dropIfExists('user_sub_menus');
    }
}