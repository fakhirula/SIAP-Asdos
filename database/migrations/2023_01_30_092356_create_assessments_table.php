<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('semester_id');
            $table->foreignId('user_id');
            $table->foreignId('course_id');
            $table->integer('assmt_1')->nullable();
            $table->integer('assmt_2')->nullable();
            $table->integer('assmt_3')->nullable();
            $table->integer('assmt_4')->nullable();
            $table->integer('assmt_5')->nullable();
            $table->integer('assmt_6')->nullable();
            $table->integer('assmt_7')->nullable();
            $table->integer('assmt_uts')->nullable();
            $table->integer('assmt_8')->nullable();
            $table->integer('assmt_9')->nullable();
            $table->integer('assmt_10')->nullable();
            $table->integer('assmt_11')->nullable();
            $table->integer('assmt_12')->nullable();
            $table->integer('assmt_13')->nullable();
            $table->integer('assmt_14')->nullable();
            $table->integer('assmt_uas')->nullable();
            $table->integer('assmt_final')->nullable();
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
        Schema::dropIfExists('assessments');
    }
};
