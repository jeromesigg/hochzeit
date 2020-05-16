<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToShedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shedules', function (Blueprint $table) {
            //
            $table->foreign('photo_id')->references('id')->on('photos');
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shedules', function (Blueprint $table) {
            //
            $table->dropForeign(['photo_id']);
            $table->dropForeign(['location_id']);
        });
    }
}
