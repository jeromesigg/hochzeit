<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestGiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_gifts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('firstname'); 
            $table->string('name'); 
            $table->text('content')->nullable(); 
            $table->text('amount'); 
            $table->bigInteger('gift_id')->index()->unsigned()->nullable();
            $table->foreign('gift_id')->references('id')->on('gifts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guest_gifts');
    }
}
