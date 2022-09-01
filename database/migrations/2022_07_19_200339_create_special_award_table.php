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
        Schema::create('special_award', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('congregation');
            $table->string('session');
            $table->string('year')->default(now()->year);
            $table->string('sponsor');
            $table->json('winner')->nullable();
            $table->json('cgpa')->nullable();
            $table->json('program')->nullable();
            $table->json('price')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('collegeid')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('collegeid')->references('collegeid')->on('colleges')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('special_award');
    }
};
