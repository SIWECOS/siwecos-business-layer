<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('acl_id')->references('id')->on('acl_level');
            $table->foreign('salutation_id')->references('id')->on('salutation');
        }
        );

        Schema::table('log_results', function (Blueprint $table) {
            $table->foreign('danger_id')->references('id')->on('danger_level');
            $table->foreign('user_id')->references('id')->on('users');
        }
        );

        Schema::table('scan_results', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('users', function (Blueprint $table){
            $table->integer('org_size_id')->unsigned();
            $table->foreign('org_size_id')->references('id')->on('org_size');
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
            $table->dropForeign('users_acl_id_foreign');
            $table->dropForeign('users_salutation_id_foreign');
        }
        );

        Schema::table('log_results', function (Blueprint $table) {
            $table->dropForeign('log_results_danger_id_foreign');
            $table->dropForeign('log_results_user_id_foreign');
        }
        );

        Schema::table('scan_results', function (Blueprint $table){
            $table->dropForeign('scan_results_user_id_foreign');
        });

        Schema::table('users', function (Blueprint $table){
            $table->dropForeign('users_org_size_id_foreign');
        });

    }
}
