<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveVerificationTokenColumnFromDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('domains', function (Blueprint $table) {
            $table->dropColumn('verification_token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('domains', function (Blueprint $table) {
            $table->string('verification_token')->unique();
        });

        DB::table('domains')->get()->each(function ($domain) {
            DB::table('domains')
                ->where('id', $domain->id)
                ->update(['verification_token' => Keygen::alphanum(64)->generate()]);
        });
    }
}
