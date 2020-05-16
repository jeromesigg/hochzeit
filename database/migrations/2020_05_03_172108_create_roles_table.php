<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
               ['id' => config('role_Administrator'), 'name' => 'Administrator', 'is_admin' => true],
               ['id' => config('role_Gast'), 'name' => 'Gast', 'is_admin' => false]
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
