<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeToTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tokens', function (Blueprint $table) {
            $table->string('type', 191)->default('regular');
        });

        Schema::table('tokens', function (Blueprint $table) {
            $table->dropColumn('acl_level');
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
            $table->unsignedInteger('acl_level')->default(1);
        });

        Schema::table('tokens', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
}
