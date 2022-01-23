<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContentTypeColumnToAlbam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('albam', function (Blueprint $table) {
            $table->string('content_type')->nullable();
            $table->string('primary_track_type')->nullable();
            $table->string('secondary_track_type')->nullable();
            $table->string('instrumental')->nullable();
            $table->string('title')->nullable();
            $table->string('version')->nullable();


            $table->string('primary_artist')->nullable();
            $table->string('featuring')->nullable();
            $table->string('remixer')->nullable();
            $table->string('author')->nullable();
            $table->string('composer')->nullable();
            $table->string('arranger')->nullable();



            $table->string('producer')->nullable();
            $table->string('pline')->nullable();
            $table->string('production_year')->nullable();
            $table->string('publisher')->nullable();
            $table->string('isre')->nullable();
            $table->string('generate_isre')->nullable();



            $table->string('genre')->nullable();
            $table->string('subgenre')->nullable();
            $table->string('secondary_genre')->nullable();
            $table->string('sub_secondary_genre')->nullable();
            $table->string('price_tier')->nullable();
            $table->string('producer_catalogue_number')->nullable();
            $table->string('parental_advisory')->nullable();


            $table->string('preview')->nullable();
            $table->string('track_title_language')->nullable();
            $table->string('lyrics_language')->nullable();
            $table->string('lyrics')->nullable();




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
            $table->dropColumn('content_type');
            $table->dropColumn('primary_track_type');
            $table->dropColumn('secondary_track_type');
            $table->dropColumn('instrumental');
            $table->dropColumn('title');
            $table->dropColumn('version');



            $table->dropColumn('primary_artist');
            $table->dropColumn('featuring');
            $table->dropColumn('remixer');
            $table->dropColumn('author');
            $table->dropColumn('composer');
            $table->dropColumn('arranger');

            $table->dropColumn('producer');
            $table->dropColumn('pline');
            $table->dropColumn('production_year');
            $table->dropColumn('publisher');
            $table->dropColumn('isre');
            $table->dropColumn('generate_isre');


            $table->dropColumn('genre');
            $table->dropColumn('subgenre');
            $table->dropColumn('secondare_genre');
            $table->dropColumn('sub_secondare_genre');
            $table->dropColumn('price_tier');
            $table->dropColumn('producer_catalogue_number');


            $table->dropColumn('parental_advisory');
            $table->dropColumn('preview');
            $table->dropColumn('track_title_language');
            $table->dropColumn('lyrics_language');
            $table->dropColumn('lyrics');
            


        });
    }
}
