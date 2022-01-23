<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddServiceToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('user_image')->nullable();
            $table->string('subscription')->nullable();
            $table->string('company_name')->nullable();
            $table->string('label_name')->nullable();
            $table->string('revenue_share')->nullable();
            $table->string('membership')->nullable();
            $table->string('service')->nullable();

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
            $table->dropColumn('user_image');
            $table->dropColumn('subscription');

            $table->dropColumn('company_name');

            $table->dropColumn('label_name');

            $table->dropColumn('revenue_share');

            $table->dropColumn('membership');

            $table->dropColumn('service');


        });
    }
}
