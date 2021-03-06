<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigrateIdsToBigIntegers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('APP_ENV') !== 'testing') {
            Schema::table('users', function (Blueprint $table) {
                $table->dropForeign(['token_id']);
            });

            Schema::table('scans', function (Blueprint $table) {
                $table->dropForeign(['domain_id']);
            });
        }

        Schema::table('users', function (Blueprint $table) {
            $table->bigIncrements('id')->change();
            $table->unsignedBigInteger('token_id')->nullable()->change();
        });

        Schema::table('scans', function (Blueprint $table) {
            $table->bigIncrements('id')->change();
            $table->unsignedBigInteger('domain_id')->change();
        });

        Schema::table('domains', function (Blueprint $table) {
            $table->bigIncrements('id')->change();
            $table->unsignedBigInteger('token_id')->change();
        });

        Schema::table('tokens', function (Blueprint $table) {
            $table->bigIncrements('id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tokens', function (Blueprint $table) {
            $table->increments('id')->change();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->increments('id')->change();
            $table->integer('token_id')->nullable()->change();
        });

        Schema::table('domains', function (Blueprint $table) {
            $table->increments('id')->change();
            $table->integer('token_id')->change();
        });

        Schema::table('scans', function (Blueprint $table) {
            $table->increments('id')->change();
            $table->unsignedInteger('domain_id')->change();
        });
    }
}
