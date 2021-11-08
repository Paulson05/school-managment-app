<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllresultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allresult', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->string('full_number');
            $table->bigInteger('departments_id');
            $table->bigInteger('semester_id');
            $table->bigInteger('levels_id');
            $table->bigInteger('faculty_id');
            $table->string('course1');
            $table->string('course2');
            $table->string('course3');
            $table->string('course4');
            $table->string('course5');
            $table->string('course6')->nullable();
            $table->string('course7')->nullable();
            $table->string('course8')->nullable();
            $table->string('course9')->nullable();
            $table->string('course10')->nullable();
            $table->string('course11')->nullable();
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
        Schema::dropIfExists('allresult');
    }
}
