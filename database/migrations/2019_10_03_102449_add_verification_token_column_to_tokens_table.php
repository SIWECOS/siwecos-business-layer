<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Keygen\Keygen;

class AddVerificationTokenColumnToTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tokens', function (Blueprint $table) {
            $table->string('verification_token')->nullable();
        });

        DB::table('tokens')->get()->each(function ($token) {
            DB::table('tokens')
                ->where('id', $token->id)
                ->update(['verification_token' => Keygen::alphanum(42)->generate()]);
        });

        Schema::table('tokens', function (Blueprint $table) {
            $table->string('verification_token')->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tokens', function (Blueprint $table) {
            $table->dropColumn('verification_token');
        });
    }
}
