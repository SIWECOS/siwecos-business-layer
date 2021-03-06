<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class V3AdjustmentsForScansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('scans');

        Schema::create('scans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');

            $table->boolean('has_error')->default(false);
            $table->integer('score')->default(0);

            $table->json('results')->default('[]');

            $table->dateTime('started_at')->nullable();
            $table->dateTime('finished_at')->nullable();
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
        Schema::table('scans', function (Blueprint $table) {
            $table->dropColumn('url');
        });
    }
}
