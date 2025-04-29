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
        Schema::create('professional_liability_claims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('providers_name')->nullable();
            $table->string('patient_involved')->nullable();
            $table->string('patient_age')->nullable();
            $table->string('month_year_occurrence')->nullable();
            $table->string('month_year_lawsuit')->nullable();
            $table->string('event_precipitating_claim')->nullable();
            $table->string('insurance_carrier_at_time')->nullable();
            $table->string('claim_status')->nullable();
            $table->string('defendants')->nullable();
            $table->string('patients_outcome')->nullable();
            $table->string('alleged_to_harm')->nullable();
            $table->string('reference_to_adverse_events')->nullable();
            $table->string('event_role')->nullable();
            $table->string('status_pending')->nullable();
            $table->string('pending_status_date')->nullable();
            $table->string('defense_case_handling')->nullable();
            $table->string('awaiting_trial')->nullable();
            $table->string('awaiting_trial_check')->nullable();
            $table->string('awaiting_trial_date')->nullable();
            $table->string('settled_out_of_court')->nullable();
            $table->string('settled_out_of_court_check')->nullable();
            $table->string('settled_out_of_court_date')->nullable();
            $table->string('total_settlement_amount')->nullable();
            $table->string('paid_settlement_amount')->nullable();
            $table->string('status_dismissed')->nullable();
            $table->string('dissmissed_date')->nullable();
            $table->string('status_defense_verdict')->nullable();
            $table->string('defense_verdict_date')->nullable();
            $table->string('status_plaintiff_verdict')->nullable();
            $table->string('plaintiff_verdict_date')->nullable();
            $table->string('status_judgement_amount')->nullable();
            $table->string('judgement_amount')->nullable();
            $table->string('judgement_date')->nullable();
            $table->string('judgement_total_amount')->nullable();
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
        Schema::dropIfExists('professional_liability_claims');
    }
};
