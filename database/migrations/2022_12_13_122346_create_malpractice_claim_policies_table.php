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
        Schema::create('malpractice_claim_policies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('malpractice_insurance_carrier')->nullable();
            $table->string('policy_number')->nullable();
            $table->string('policy_date_from')->nullable();
            $table->string('policy_date_to')->nullable();
            $table->string('amount_of_coverage')->nullable();
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
        Schema::dropIfExists('malpractice_claim_policies');
    }
};
