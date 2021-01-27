<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            Schema::dropIfExists('users');
        }
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('permission_id');
            $table->unsignedBigInteger('bussiness_id');
            $table->unsignedBigInteger('admin_contact_id');
            $table->unsignedBigInteger('workplaces_id');
            $table->unsignedBigInteger('expertise_id');

            $table->foreign('bussiness_id')->references('id')->on('bussiness');
            $table->foreign('expertise_id')->references('id')->on('expertises');
            $table->foreign('admin_contact_id')->references('id')->on('admin_contacts');
            $table->foreign('permission_id')->references('id')->on('permissions');
            $table->foreign('workplaces_id')->references('id')->on('workplaces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
