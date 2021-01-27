<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vouchers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (Schema::hasTable('vouchers')) {
            Schema::dropIfExists('vouchers');
        }
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('vouchers_name');
            $table->text('content');
            $table->string('image');
            $table->dateTime('time_start');
            $table->dateTime('time_end');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('vouchers');
    }
}
