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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->integer('grad_year')->nullable();
            $table->string('code')->nullable();
            $table->string('university_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('rate')->default('0,0,0,0,0');
            $table->boolean('status')->default(0)->comment('[0=>pendiente, 1=>Perfil aprovado, 2=>Rechazado o Baneado]');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
