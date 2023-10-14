<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('valuations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('landholding_id');
            $table->bigInteger('status_id');
            $table->integer('aocNo');
            $table->string('claimNo');
            $table->string('dateTransmitted');
            $table->string('dateofMov');
            $table->string('dateServed');
            $table->string('stateReason')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valuations');
    }
};
