<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->string('activation_key', 191)->nullable();
            $table->string('address',191)->nullable();
            $table->string('plz',191)->nullable();
            $table->string('city',191)->nullable();
            $table->string('phone',191)->nullable();
            $table->string('org_name', 191)->nullable();
            $table->string('org_industry', 191)->nullable();
            $table->string('org_address',191)->nullable();
            $table->string('org_plz',191)->nullable();
            $table->string('org_city',191)->nullable();
            $table->string('org_phone',191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
