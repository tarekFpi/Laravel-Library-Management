<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_adds', function (Blueprint $table) {
            $table->id();
            $table->string('BookId');
            $table->string('BookName');
            $table->string('page');
            $table->string('BookDetails');
            $table->string('publication_name');
            $table->string('DepartmentName');
            $table->integer('Delivary_price');
            $table->integer('Quanitiy');
            $table->string('Update_Date');
            $table->string('image');
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
        Schema::dropIfExists('book_adds');
    }
}
