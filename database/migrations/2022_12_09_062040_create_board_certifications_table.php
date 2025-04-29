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
        Schema::create('board_certifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('board_certified')->nullable();
            $table->string('issuing_board')->nullable();
            $table->string('issuing_board_speciality')->nullable();
            $table->string('issuing_board_certified_date')->nullable();
            $table->string('issuing_board_recertified_date')->nullable();
            $table->string('issuing_board_expiration_date')->nullable();
            $table->string('examined_board')->nullable();
            $table->string('examined_board_name')->nullable();
            $table->string('examined_board_date')->nullable();
            $table->string('certified_board')->nullable();
            $table->string('certified_board_date')->nullable();
            $table->string('bls_certification')->nullable();
            $table->string('bls_certification_expiration_date')->nullable();
            $table->string('acls_certification')->nullable();
            $table->string('acls_certification_expiration_date')->nullable();
            $table->string('atls_certification')->nullable();
            $table->string('atls_certification_expiration_date')->nullable();
            $table->string('pals_certification')->nullable();
            $table->string('pals_certification_expiration_date')->nullable();
            // $table->string('federal_dea_number')->nullable();
            // $table->string('dea_expiration_date')->nullable();
            $table->string('ecfmg_certificate')->nullable();
            $table->string('ecfmg_certificate_id')->nullable();
            $table->string('fifth_pathway')->nullable();
            $table->string('fifth_pathway_location')->nullable();
            $table->string('national_board_exam')->nullable();
            $table->string('national_board_exam_date')->nullable();
            $table->string('flex_exam')->nullable();
            $table->string('flex_exam_date')->nullable();
            $table->string('spex_exam')->nullable();
            $table->string('spex_exam_date')->nullable();
            $table->string('usmle_exam')->nullable();
            $table->string('usmle_exam_date')->nullable();
            $table->string('state_board_exam')->nullable();
            $table->string('state_board_exam_date')->nullable();
            $table->string('lmcc_exam')->nullable();
            $table->string('lmcc_exam_date')->nullable();
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
        Schema::dropIfExists('board_certifications');
    }
};
