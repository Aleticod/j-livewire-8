<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id'); // user id
            $table->unsignedBigInteger('category_id'); // category id

            $table->string('name'); // name of the course
            $table->string('slug'); // slug of the course
            $table->string('image'); // image of the course
            $table->text('description'); // description of the course

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users'); // user id foreign key
            $table->foreign('category_id')->references('id')->on('categories'); // category id foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
