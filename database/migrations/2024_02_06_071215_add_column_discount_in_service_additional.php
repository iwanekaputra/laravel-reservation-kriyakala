<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnDiscountInServiceAdditional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_additionals', function (Blueprint $table) {
            $table->dropColumn('price_promo');
            $table->integer('discount_weekday');
            $table->integer('discount_weekend');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_additionals', function (Blueprint $table) {
            $table->string('price_promo');
            $table->dropColumn('discount_weekday');
            $table->dropColumn('discount_weekend');
        });
    }
}
