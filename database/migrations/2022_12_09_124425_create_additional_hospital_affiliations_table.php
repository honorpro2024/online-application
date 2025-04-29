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
        Schema::create('additional_hospital_affiliations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('ha_facility')->nullable();
            $table->string('ha_phone')->nullable();
            $table->string('ha_address')->nullable();
            $table->string('ha_city_state_zip')->nullable();
            $table->string('ha_contact')->nullable();
            $table->string('ha_date_from')->nullable();
            $table->string('ha_date_to')->nullable();
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
        Schema::dropIfExists('additional_hospital_affiliations');
    }
};
