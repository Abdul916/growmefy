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
        Schema::create('posters', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título personalizado del póster
            $table->string('qr_code')->nullable();
            $table->string('qr_code_path')->nullable();
            $table->string('paper_size')->default('A4');
            $table->foreignId('business_id')->constrained()->onDelete('cascade'); // Relación con el Business
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posters');
    }
};
