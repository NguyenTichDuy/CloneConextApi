<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (Schema::hasTable('admin_contacts')) {
            Schema::dropIfExists('admin_contacts');
        }
        Schema::create('admin_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('hotline');
            $table->string('email');
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
        Schema::dropIfExists('admin_contacts');
    }
}
