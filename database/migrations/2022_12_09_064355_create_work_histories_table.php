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
        Schema::create('work_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('work_history_from')->nullable();
            $table->string('work_history_to')->nullable();
            $table->string('work_history_facility_name')->nullable();
            $table->string('work_history_phone')->nullable();
            $table->string('work_history_address')->nullable();
            $table->string('work_history_city')->nullable();
            $table->string('work_history_state')->nullable();
            $table->string('work_history_zipcode')->nullable();
            $table->string('work_history_do_not_contact')->nullable();
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
        Schema::dropIfExists('work_histories');
    }
};
