<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTokenFieldsOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('token_id')->nullable();
            $table->foreign('token_id')->references('id')->on('tokens');
        });

        // Fix for dropColum has to be in an own Schema
        // https://github.com/laravel/framework/issues/2979#issuecomment-213644172
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('token');
        });

        // Fix for SQLite standard
        // https://laracasts.com/discuss/channels/general-discussion/migrations-sqlite-general-error-1-cannot-add-a-not-null-column-with-default-value-null#reply=33390
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('token_id')->nullable(false)->change();
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
            $table->string('token')->nullable();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('token_id');
        });
    }
}
