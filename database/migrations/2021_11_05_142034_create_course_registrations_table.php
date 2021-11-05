<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('faculty_id');
            $table->integer('departments_id');
            $table->string('course_1')->nullable();
            $table->string('course_2')->nullable();
            $table->string('course_3')->nullable();
            $table->string('course_4')->nullable();
            $table->string('course_5')->nullable();
            $table->string('course_6')->nullable();
            $table->string('course_7')->nullable();
            $table->string('course_8')->nullable();
            $table->string('course_9')->nullable();
            $table->string('course_10')->nullable();
            $table->string('course_11')->nullable();
            $table->string('course_12')->nullable();
            $table->string('course_13')->nullable();
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
        Schema::dropIfExists('course_registrations');
    }
}
