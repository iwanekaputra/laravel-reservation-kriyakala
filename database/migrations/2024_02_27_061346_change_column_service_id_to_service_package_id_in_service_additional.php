<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnServiceIdToServicePackageIdInServiceAdditional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_additionals', function (Blueprint $table) {
            $table->renameColumn('service_id', 'service_package_id');
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
            $table->renameColumn('service_package_id', 'service_id');
        });
    }
}
