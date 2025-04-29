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
        Schema::create('licensings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('licensing_state')->nullable();
            $table->string('license_number')->nullable();
            $table->string('license_status')->nullable();
            $table->string('license_granted_date')->nullable();
            $table->string('license_expiration_date')->nullable();
            $table->string('state_medicare_provider_number')->nullable();
            $table->string('state_medicaid_provider_number')->nullable();
            $table->string('state_controlled_substance_permit_number')->nullable();
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
        Schema::dropIfExists('licensings');
    }
};
