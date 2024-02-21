<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnDiscountWeekdayInServicePackage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_packages', function (Blueprint $table) {
            $table->dropColumn('discount');
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
        Schema::table('service_packages', function (Blueprint $table) {
            $table->integer('discount');
            $table->dropColumn('discount_weekday');
            $table->dropColumn('discount_weekend');
        });
    }
}
