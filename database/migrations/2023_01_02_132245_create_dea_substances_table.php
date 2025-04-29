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
        Schema::create('dea_substances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('licensing_dea_state')->nullable();
            $table->string('license_dea_number')->nullable();
            $table->string('license_dea_status')->nullable();
            $table->string('license_dea_granted_date')->nullable();
            $table->string('license_dea_expiration_date')->nullable();
            $table->string('dea_state_medicare_provider_number')->nullable();
            $table->string('dea_state_medicaid_provider_number')->nullable();
            $table->string('dea_state_controlled_substance_permit_number')->nullable();
            $table->string('federal_dea_number')->nullable();
            $table->string('dea_expiration_date')->nullable();
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
        Schema::dropIfExists('dea_substances');
    }
};
