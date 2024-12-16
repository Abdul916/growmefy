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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
            $table->string('logo')->nullable();
            $table->string('background_image')->nullable();
            $table->text('general_feedback_question')->nullable();
            $table->text('ask_for_review')->nullable();
            $table->string('gbp_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('tripadvisor_url')->nullable();
            $table->string('trustpilot_url')->nullable();
            $table->string('booking_url')->nullable();
            $table->string('airbnb_url')->nullable();
            $table->string('google_play_url')->nullable();
            $table->string('app_store_url')->nullable();
            $table->string('amazon_url')->nullable();
            $table->string('ebay_url')->nullable();
            $table->string('yelp_url')->nullable();
            $table->text('thank_you_phrase')->nullable();
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
