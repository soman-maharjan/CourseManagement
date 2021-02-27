<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('module_code');
            $table->string('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('credit_score');
            $table->boolean('is_archived')->default(0);
            $table->unsignedBigInteger('module_leader')->nullable();
            $table->timestamps();
        });

        Schema::table('modules', function (Blueprint $table) {
            $table->foreign('module_leader')->references('id')->on('staff')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
