<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albam', function (Blueprint $table) {
            $table->id();

            $table->string('user_id')->nullable();
            $table->string('albam_title')->nullable();
            $table->string('release_version')->nullable();
            $table->string('artist_name')->nullable();
            $table->string('sportify_artist_url')->nullable();
            $table->string('metadata_language')->nullable();
            $table->string('release_date')->nullable();
            $table->string('type')->nullable();
            $table->string('level')->nullable();
            $table->string('albam_image')->nullable();



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
        Schema::dropIfExists('albam');
    }
}
