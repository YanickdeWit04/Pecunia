<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavegoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savegoals', function (Blueprint $table) {
            $table->id();
            $table->string('spaarenvoor');
            $table->float('amount');
            $table->datetime('date');
            $table->float('startbedrag');
            $table->boolean('betalingsherinnering')->nullable();
            $table->string('spaarrekening');
            $table->foreignId('user_id');
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
        Schema::dropIfExists('savegoals');
    }
}
