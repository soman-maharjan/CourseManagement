<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->char('gender');
            $table->string('student_id');
            $table->date('date_of_birth');
            $table->date('date_joined');
            $table->string('email')->unique();
            $table->string('mobile_number')->unique();
            $table->string('address');
            $table->boolean('is_archived')->default(0);
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('pat_id')->nullable();
            $table->timestamps();
        });

        Schema::table('students', function (Blueprint $table) {
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('pat_id')->references('id')->on('staff')->onDelete('cascade');

        });
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
