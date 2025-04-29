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
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('suffix')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('degree')->nullable();
            $table->string('social_security_number')->nullable();
            $table->string('home_address')->nullable();
            $table->string('home_phone_number')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('cell_phone_number')->nullable();
            $table->string('office_address')->nullable();
            $table->string('office_phone_number')->nullable();
            $table->string('office_city')->nullable();
            $table->string('office_state')->nullable();
            $table->string('office_zip_code')->nullable();
            $table->string('email_address')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('primary_speciality')->nullable();
            $table->string('secondary_speciality')->nullable();
            $table->string('present_position')->nullable();
            $table->string('npi')->nullable();
            $table->string('medicare')->nullable();
            $table->string('upin')->nullable();
            $table->string('fed_tax_id')->nullable();
            $table->string('medicaid')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_address')->nullable();
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
        Schema::dropIfExists('personal_information');
    }
};
