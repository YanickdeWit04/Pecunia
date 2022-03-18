<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankstatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankstatements', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount');
            $table->string('name');
            $table->boolean('type');
            $table->dateTime('date');
            $table->foreign('categories_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bankstatements');
    }
}
