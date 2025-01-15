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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->boolean('monday')->default(false);
            $table->time('mon_init')->nullable();
            $table->time('mon_end')->nullable();
            $table->string('mon_rest_time')->nullable();
            $table->boolean('tuesday')->default(false);
            $table->time('tue_init')->nullable();
            $table->time('tue_end')->nullable();
            $table->string('tue_rest_time')->nullable();
            $table->boolean('wednesday')->default(false);
            $table->time('wed_init')->nullable();
            $table->time('wed_end')->nullable();
            $table->string('wed_rest_time')->nullable();
            $table->boolean('thursday')->default(false);
            $table->time('thu_init')->nullable();
            $table->time('thu_end')->nullable();
            $table->string('thu_rest_time')->nullable();
            $table->boolean('friday')->default(false);
            $table->time('fri_init')->nullable();
            $table->time('fri_end')->nullable();
            $table->string('fri_rest_time')->nullable();
            $table->boolean('saturday')->default(false);
            $table->time('sat_init')->nullable();
            $table->time('sat_end')->nullable();
            $table->string('sat_rest_time')->nullable();
            $table->boolean('sunday')->default(false);
            $table->time('sun_init')->nullable();
            $table->time('sun_end')->nullable();
            $table->string('sun_rest_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
