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
        Schema::create('qr_codes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id')->constrained()->onDelete('cascade'); // Relación con Business
            $table->string('qr_code_path'); // Ruta del archivo del código QR
            $table->string('size')->default(300); // Tamaño del QR
            $table->string('error_correction')->default('M'); // Nivel de corrección de errores
            $table->integer('margin')->default(1); // Margen del QR
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_codes');
    }
};
