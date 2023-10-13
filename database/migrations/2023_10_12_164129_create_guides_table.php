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
        Schema::create('guides', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->longText('img');
            $table->string('ad_duration_per_day');
            $table->string('city');
            $table->string('advertiser_name');
            $table->string('phone_number');
            $table->string('mobile')->nullable();
            $table->string('email');
            $table->longText('facebook_url');
            $table->enum('state',['pinned','refused','allowed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guides');
    }
};
