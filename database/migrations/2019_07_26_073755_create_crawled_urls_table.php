<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrawledUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crawled_urls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('domain_id')->nullable();
            $table->text('url')->unique();
            $table->boolean('is_main_url')->default(false);
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
        Schema::dropIfExists('crawled_urls');
    }
}
