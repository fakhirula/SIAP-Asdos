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
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('semester_id');
            $table->foreignId('mahasiswa_id');
            $table->integer('attd_1')->nullable();
            $table->integer('attd_2')->nullable();
            $table->integer('attd_3')->nullable();
            $table->integer('attd_4')->nullable();
            $table->integer('attd_5')->nullable();
            $table->integer('attd_6')->nullable();
            $table->integer('attd_7')->nullable();
            $table->integer('attd_uts')->nullable();
            $table->integer('attd_8')->nullable();
            $table->integer('attd_9')->nullable();
            $table->integer('attd_10')->nullable();
            $table->integer('attd_11')->nullable();
            $table->integer('attd_12')->nullable();
            $table->integer('attd_13')->nullable();
            $table->integer('attd_14')->nullable();
            $table->integer('attd_uas')->nullable();
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
        Schema::dropIfExists('presensis');
    }
};
