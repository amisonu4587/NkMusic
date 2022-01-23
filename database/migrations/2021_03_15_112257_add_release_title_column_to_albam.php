<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReleaseTitleColumnToAlbam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('albam', function (Blueprint $table) {
         
            $table->string('release_title')->nullable();
           
            $table->string('formate')->nullable();
            $table->string('line')->nullable();
            $table->string('line2')->nullable();
      
            $table->string('upc')->nullable();
            $table->string('catalouge_name')->nullable();

            $table->string('audio')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('albam', function (Blueprint $table) {
            $table->dropColumn('release_title');
            $table->dropColumn('version');
            $table->dropColumn('formate');
            $table->dropColumn('line');
            $table->dropColumn('line2');
            $table->dropColumn('production_year');
            $table->dropColumn('upc');

            $table->dropColumn('catalouge_name');
            $table->dropColumn('audio');

        });
    }
}
