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
            $table->string('title');
            $table->integer('semester');
            $table->string('description');
            $table->integer('credit_score');
            $table->boolean('is_archived')->default(0);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('cost');
            $table->unsignedBigInteger('course_leader')->nullable();
            $table->timestamps();
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->foreign('course_leader')->references('id')->on('staff')->onDelete('cascade');
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
