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
        Schema::create('education_and_trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('medical_school')->nullable();
            $table->string('degree')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('e_city')->nullable();
            $table->string('e_state')->nullable();
            $table->string('internship_training_name')->nullable();
            $table->string('internship_training_city')->nullable();
            $table->string('internship_training_state')->nullable();
            $table->string('internship_training_start_date')->nullable();
            $table->string('internship_training_end_date')->nullable();
            $table->string('category_of_training')->nullable();
            $table->string('residency_training_name')->nullable();
            $table->string('residency_training_city')->nullable();
            $table->string('residency_training_state')->nullable();
            $table->string('residency_training_start_date')->nullable();
            $table->string('residency_training_end_date')->nullable();
            $table->string('residency_training_speciality')->nullable();
            $table->string('fellowship_training_name')->nullable();
            $table->string('fellowship_training_city')->nullable();
            $table->string('fellowship_training_state')->nullable();
            $table->string('fellowship_training_start_date')->nullable();
            $table->string('fellowship_training_end_date')->nullable();
            $table->string('fellowship_training_speciality')->nullable();
            $table->string('additional_training_name')->nullable();
            $table->string('additional_training_city')->nullable();
            $table->string('additional_training_state')->nullable();
            $table->string('additional_training_start_date')->nullable();
            $table->string('additional_training_end_date')->nullable();
            $table->string('additional_training_category')->nullable();
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
        Schema::dropIfExists('education_and_trainings');
    }
};
