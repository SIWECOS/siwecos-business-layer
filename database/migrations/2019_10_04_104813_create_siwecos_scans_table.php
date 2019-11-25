<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiwecosScansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siwecos_scans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('domain_id');
            $table->boolean('is_freescan');
            $table->boolean('is_recurrent');

            $table->timestamps();

            $table->foreign('domain_id')->references('id')->on('domains');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siwecos_scans');
    }
}
