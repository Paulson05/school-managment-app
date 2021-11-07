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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->string('full_number')->nullable();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('username');
            $table->string('gender');
            $table->string('age');
            $table->bigInteger('departments_id');
            $table->bigInteger('semester_id');
            $table->bigInteger('levels_id');
            $table->bigInteger('faculty_id');
            $table->string('State_of_origin');
            $table->string('lga');
            $table->string('address');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
