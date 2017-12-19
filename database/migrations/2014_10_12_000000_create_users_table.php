<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('email',191)->unique();
            $table->string('first_name',191);
            $table->string('last_name',191);
            $table->string('address',191);
            $table->string('plz',191);
            $table->string('city',191);
            $table->string('phone',191);
            $table->string('token',191);
            $table->string('org_name', 191);
            $table->string('org_industry', 191);
            $table->string('org_address',191);
            $table->string('org_plz',191);
            $table->string('org_city',191);
            $table->string('org_phone',191);
            $table->integer('acl_id')->unsigned()->default(1); // UserLevel as standard
            $table->integer('salutation_id')->unsigned();
            $table->boolean('agb')->default(false);
            $table->boolean('active')->default(false);
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
