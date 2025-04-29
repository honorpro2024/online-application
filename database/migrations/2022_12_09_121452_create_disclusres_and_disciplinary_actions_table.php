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
        Schema::create('disclusres_and_disciplinary_actions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('question_1')->nullable();
            $table->string('question_2')->nullable();
            $table->string('question_3')->nullable();
            $table->string('question_4')->nullable();
            $table->string('question_5')->nullable();
            $table->string('question_6')->nullable();
            $table->string('question_7')->nullable();
            $table->string('question_8')->nullable();
            $table->string('question_9')->nullable();
            $table->string('question_10')->nullable();
            $table->string('question_11')->nullable();
            $table->string('question_12')->nullable();
            $table->string('question_13')->nullable();
            $table->string('question_14')->nullable();
            $table->string('question_15')->nullable();
            $table->string('question_16')->nullable();
            $table->string('question_17')->nullable();
            $table->string('question_18')->nullable();
            $table->string('question_19')->nullable();
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
        Schema::dropIfExists('disclusres_and_disciplinary_actions');
    }
};
