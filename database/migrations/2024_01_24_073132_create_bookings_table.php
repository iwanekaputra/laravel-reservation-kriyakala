<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('name');
            $table->string('studio');
            $table->string('nowa');
            $table->string('email');
            $table->date('in_date');
            $table->string('time');
            $table->string('service');
            $table->string('package');
            $table->json('additional')->nullable();
            $table->string('price_total');
            $table->string('price_package');
            $table->string('main_background');
            $table->string('additional_background');
            $table->string('link_payment');
            $table->string('dp')->nullable();
            $table->string('price_promo')->nullable();
            $table->string('status_payment');
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
        Schema::dropIfExists('bookings');
    }
}
