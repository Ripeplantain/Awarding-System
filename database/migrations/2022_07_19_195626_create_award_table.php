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
        Schema::create('award', function (Blueprint $table) {
            $table->id();
            $table->string('award_name');
            $table->string('award_description');
            $table->string('congregation');
            $table->string('session');
            $table->string('year')->default(now()->year);
            $table->string('sponsor');
            $table->string('price')->nullable();
            $table->unsignedInteger('studid')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->integer('deptid')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('studid')->references('studid')->on('students_db')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('deptid')->references('deptid')->on('departments')->onUpdate('cascade')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('award');
    }
};
