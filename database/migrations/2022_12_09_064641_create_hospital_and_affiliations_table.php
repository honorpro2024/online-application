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
        Schema::create('hospital_and_affiliations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('hospital_and_affiliation_apply')->nullable();
            $table->string('primary_facility_name')->nullable();
            $table->string('appointment_from')->nullable();
            $table->string('appointment_to')->nullable();
            $table->string('appointment_city')->nullable();
            $table->string('appointment_state')->nullable();
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
        Schema::dropIfExists('hospital_and_affiliations');
    }
};
