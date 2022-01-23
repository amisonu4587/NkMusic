<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->id();

            $table->string('user_id')->nullable();
            $table->string('album_title')->nullable();
            $table->string('album_category')->nullable();
            $table->string('all_genre')->nullable();
            $table->string('all_sub_category')->nullable();
            $table->string('description')->nullable();
            $table->string('release_date')->nullable();
            $table->string('religion')->nullable();
            $table->string('religion_category')->nullable();
            $table->string('religion_sub_category')->nullable();

            $table->string('religion_description')->nullable();
            $table->string('language')->nullable();
            $table->string('isre')->nullable();
            $table->string('generate_isre')->nullable();
            $table->string('generate_upc')->nullable();
            $table->string('level')->nullable();
            $table->string('pline')->nullable();
            $table->string('cline')->nullable();
            $table->string('lyrics')->nullable();



            
            $table->string('composer')->nullable();
            $table->string('artist')->nullable();
            $table->string('mood')->nullable();
            $table->string('additional_information')->nullable();
            $table->string('callertune')->nullable();
            $table->string('album_image')->nullable();
            $table->string('audio')->nullable();
            $table->string('music_release_date')->nullable();
            $table->string('premier_release_date')->nullable();
            $table->string('star_cast')->nullable();
            $table->string('banner_image')->nullable();

            $table->string('director')->nullable();
            $table->string('producer')->nullable();
           

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film');
    }
}
