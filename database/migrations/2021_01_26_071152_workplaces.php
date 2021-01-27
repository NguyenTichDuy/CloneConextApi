<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Workplaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (Schema::hasTable('workplaces')) {
            Schema::dropIfExists('workplaces');
        }
        Schema::create('workplaces', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('address');
            $table->string('image');
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
        Schema::dropIfExists('workplaces');
    }
}
