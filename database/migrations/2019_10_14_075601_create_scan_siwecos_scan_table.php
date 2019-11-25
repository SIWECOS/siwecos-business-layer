<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScanSiwecosScanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scan_siwecos_scan', function (Blueprint $table) {
            $table->primary(['scan_id', 'siwecos_scan_id']);
            $table->unsignedBigInteger('scan_id');
            $table->unsignedBigInteger('siwecos_scan_id');
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
        Schema::dropIfExists('scan_siwecos_scan');
    }
}
