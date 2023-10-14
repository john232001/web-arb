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
        Schema::create('awardtitles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('landholding_id');
            $table->bigInteger('lotNumber_id');
            $table->bigInteger('awardType_id');
            $table->string('fbOrcname');
            $table->integer('serialNo');
            $table->string('genDate');
            $table->integer('epebNo');
            $table->string('epebDate');
            $table->string('registerDate');
            $table->string('awardtitleNo');
            $table->string('distributeDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('awardtitles');
    }
};
