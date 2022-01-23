<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayoutPartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payout_partner', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
           
            $table->string('service_name')->nullable();
            $table->string('month')->nullable();

            $table->string('payout')->nullable();
           
            $table->string('date')->nullable();
            $table->string('ref_no')->nullable();
            $table->string('bank_name')->nullable();

            
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
        Schema::dropIfExists('payout_partner');
    }
}
