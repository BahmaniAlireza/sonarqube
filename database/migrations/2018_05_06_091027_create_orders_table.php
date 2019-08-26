<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('price');
            $table->boolean('status');
            $table->string('site_name');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('host_id');
            $table->string('dns1');
            $table->string('dns2');
            $table->string('domain');
            $table->integer('user_id');
            $table->integer('theme_id')->nullable();
            $table->boolean('payed')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
