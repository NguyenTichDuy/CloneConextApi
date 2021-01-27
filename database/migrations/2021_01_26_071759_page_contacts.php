<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('page_contacts')) {
            Schema::dropIfExists('page_contacts');
        }
        Schema::create('page_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('content');
            $table->string('email');
            $table->string('phone');
            $table->text('subject');
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
        Schema::dropIfExists('page_contacts');
    }
}
