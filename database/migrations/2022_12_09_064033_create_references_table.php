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
        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('reference_1_name')->nullable();
            $table->string('reference_1_specialty')->nullable();
            $table->string('reference_1_phone_no')->nullable();
            $table->string('reference_1_position')->nullable();
            $table->string('reference_1_address')->nullable();
            $table->string('reference_1_city')->nullable();
            $table->string('reference_1_state')->nullable();
            $table->string('reference_1_zipcode')->nullable();
            $table->string('reference_1_fax')->nullable();
            $table->string('reference_1_email')->nullable();
            $table->string('reference_1_years_work_together_start')->nullable();
            $table->string('reference_1_years_work_together_end')->nullable();
            $table->string('reference_1_facility')->nullable();

            $table->string('reference_2_name')->nullable();
            $table->string('reference_2_specialty')->nullable();
            $table->string('reference_2_phone_no')->nullable();
            $table->string('reference_2_position')->nullable();
            $table->string('reference_2_address')->nullable();
            $table->string('reference_2_city')->nullable();
            $table->string('reference_2_state')->nullable();
            $table->string('reference_2_zipcode')->nullable();
            $table->string('reference_2_fax')->nullable();
            $table->string('reference_2_email')->nullable();
            $table->string('reference_2_years_work_together_start')->nullable();
            $table->string('reference_2_years_work_together_end')->nullable();
            $table->string('reference_2_facility')->nullable();

            $table->string('reference_3_name')->nullable();
            $table->string('reference_3_specialty')->nullable();
            $table->string('reference_3_phone_no')->nullable();
            $table->string('reference_3_position')->nullable();
            $table->string('reference_3_address')->nullable();
            $table->string('reference_3_city')->nullable();
            $table->string('reference_3_state')->nullable();
            $table->string('reference_3_zipcode')->nullable();
            $table->string('reference_3_fax')->nullable();
            $table->string('reference_3_email')->nullable();
            $table->string('reference_3_years_work_together_start')->nullable();
            $table->string('reference_3_years_work_together_end')->nullable();
            $table->string('reference_3_facility')->nullable();

            $table->string('reference_4_name')->nullable();
            $table->string('reference_4_specialty')->nullable();
            $table->string('reference_4_phone_no')->nullable();
            $table->string('reference_4_position')->nullable();
            $table->string('reference_4_address')->nullable();
            $table->string('reference_4_city')->nullable();
            $table->string('reference_4_state')->nullable();
            $table->string('reference_4_zipcode')->nullable();
            $table->string('reference_4_fax')->nullable();
            $table->string('reference_4_email')->nullable();
            $table->string('reference_4_years_work_together_start')->nullable();
            $table->string('reference_4_years_work_together_end')->nullable();
            $table->string('reference_4_facility')->nullable();

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
        Schema::dropIfExists('references');
    }
};
