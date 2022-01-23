<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('album_name')->nullable();
            $table->string('album_category')->nullable();
            $table->string('language')->nullable();
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('description')->nullable();
            $table->string('release_date')->nullable();
            $table->string('isrc')->nullable();
            $table->string('isrc_name')->nullable();



            $table->string('label')->nullable();
            $table->string('pline')->nullable();
            $table->string('cline')->nullable();
            $table->string('lyricis')->nullable();
            $table->string('composer')->nullable();
            $table->string('artist')->nullable();

            $table->string('mood')->nullable();
            $table->string('callertune')->nullable();

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
        Schema::dropIfExists('album');
    }
}
