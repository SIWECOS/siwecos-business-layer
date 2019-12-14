<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyConstraintsToScanSiwecosScanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scan_siwecos_scan', function (Blueprint $table) {
            $table->foreign('scan_id')->references('id')->on('scans')->onDelete('cascade');
            $table->foreign('siwecos_scan_id')->references('id')->on('siwecos_scans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scan_siwecos_scan', function (Blueprint $table) {
            $table->dropForeign(['scan_id', 'siwecos_scan_id']);
        });
    }
}
