<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssueBookModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue_book_models', function (Blueprint $table) {
            $table->id();
            $table->string('BookId');
            $table->string('BookName');
            $table->string('publication_Name');
            $table->string('Department_book');
            $table->integer('page');
            $table->string('student_Name');
            $table->string('student_Roll');
            $table->string('Phone');
            $table->string('Delivary_Date');
            $table->integer('Day');
            $table->integer('sell_quanitiy');
            $table->integer('price');
            $table->integer('Total_price');///price
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
        Schema::dropIfExists('issue_book_models');
    }
}
