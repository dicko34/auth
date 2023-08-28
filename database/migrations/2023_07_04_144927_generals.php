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
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('category');
            $table->bigInteger('price');
            $table->string('ad_duration_per_day');
            $table->string('category');
            $table->longText('description');
            $table->string('img');
            $table->string('advertiser_name');
             $table->string('phone_number');
            $table->string('mobile');
            $table->string('email');
            // $table->string('advertiser_city');
            // $table->string('advertiser_address');
            $table->enum('state',['pinned','refused','allowed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generals');
    }
};
