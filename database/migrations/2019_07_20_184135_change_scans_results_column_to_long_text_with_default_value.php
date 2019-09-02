<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use App\Scan;

class ChangeScansResultsColumnToLongTextWithDefaultValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scans', function (Blueprint $table) {
            $table->longText('results_new')->default('[]');
        });

        Scan::all()->each(function ($scan) {
            $scan->results_new = $scan->results ?: '[]';
            $scan->save();
        });

        Schema::table('scans', function (Blueprint $table) {
            $table->dropColumn('results');
        });

        Schema::table('scans', function (Blueprint $table) {
            $table->renameColumn('results_new', 'results');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    { }
}
