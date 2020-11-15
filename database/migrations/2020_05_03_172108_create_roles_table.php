<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_admin')->default(0);
            $table->timestamps();
        });
        // Insert some stuff
        DB::table('roles')->insert(
           array(
               ['id' => config('status.role_Administrator'), 'name' => 'Administrator', 'is_admin' => true],
               ['id' => config('status.role_Freunde'), 'name' => 'Freunde', 'is_admin' => false]
           )
       );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
