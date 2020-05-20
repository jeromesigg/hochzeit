<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToInvitations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invitations', function (Blueprint $table) {
            //
            $table->foreign('response_id')->references('id')->on('responses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invitations', function (Blueprint $table) {
            //
            $table->dropForeign(['response_id']);
        });
    }
}
