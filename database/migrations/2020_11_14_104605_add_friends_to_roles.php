<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFriendsToRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles', function (Blueprint $table) {
            //
            $table->boolean('is_invited')->default(0);
        });
        DB::table('roles')->update(array('is_invited' => true));
        
        // Insert some stuff
        DB::table('roles')->insert(
           array(
               ['id' => config('status.role_Gast'), 'name' => 'Gast', 'is_admin' => false, 'is_invited' => false]
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
        Schema::table('roles', function (Blueprint $table) {
            //
            $table->dropColumn('is_invited');
        });
    }
}
