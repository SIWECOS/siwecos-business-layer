<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('address', 191)->nullable()->change();
            $table->string('plz', 191)->nullable()->change();
            $table->string('city', 191)->nullable()->change();
            $table->string('phone', 191)->nullable()->change();
            $table->string('org_name', 191)->nullable()->change();
            $table->string('org_industry', 191)->nullable()->change();
            $table->string('org_address', 191)->nullable()->change();
            $table->string('org_plz', 191)->nullable()->change();
            $table->string('org_city', 191)->nullable()->change();
            $table->string('org_phone', 191)->nullable()->change();
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
