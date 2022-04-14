<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveSpaarrekeningFromSavinggoals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('savegoals', function (Blueprint $table) {
            $table->dropColumn('spaarrekening');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('saveggoals', function (Blueprint $table) {
            $table->string('spaarrekening');
        });

    }
}
