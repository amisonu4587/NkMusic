<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReligionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('religion_details', function (Blueprint $table) {
            $table->bigIncrements('sub_sub_cat_id');
            $table->string('sub_sub_cat_name')->nullable();
            $table->integer('sub_cat_id')->default(0);
            $table->string('cat_id')->nullable();

            $table->rememberToken();
       
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
        Schema::dropIfExists('religion_details');
    }
}
