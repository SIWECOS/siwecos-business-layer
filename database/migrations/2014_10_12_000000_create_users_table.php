<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('email', 191)->unique();
            $table->string('password', 191);

            $table->boolean('is_active')->default(false);
            $table->string('preferred_language', 191)->default('de');

            $table->string('activation_key', 191)->nullable();
            $table->string('passwordreset_token', 191)->nullable();
            $table->unsignedInteger('token_id');

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
        Schema::dropIfExists('users');
    }
}
