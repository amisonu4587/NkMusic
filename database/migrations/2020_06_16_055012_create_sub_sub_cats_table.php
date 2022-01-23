<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSubCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_sub_cats', function (Blueprint $table) {
        
            $table->bigIncrements('sub_sub_cat_id');
            $table->string('sub_sub_cat_name')->nullable();
            $table->integer('sub_cat_id')->default(0);


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
        Schema::dropIfExists('sub_sub_cats');
    }
}
