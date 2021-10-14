<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAddModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_add_models', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->unique();
            $table->integer('Roll')->unique();
            $table->string('Gender');
            $table->string('Department');
            $table->string('Semester');
            $table->string('Section');
            $table->integer('phone')->unique();
            $table->string('Gmail')->unique();
            $table->string('password')->unique();
            $table->string('Address');
            $table->string('Upload_Date');
            $table->string('Image')->unique();
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
        Schema::dropIfExists('student_add_models');
    }
}
