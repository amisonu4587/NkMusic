<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('bank')->nullable();
            $table->string('ifcs')->nullable();
            $table->string('video')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('state');
            $table->dropColumn('city');
            $table->dropColumn('bank');
            $table->dropColumn('ifcs');
            $table->dropColumn('video');





        });
    }
}
