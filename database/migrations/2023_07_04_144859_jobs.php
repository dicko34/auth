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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('specialization');
            $table->string('workplace');
            $table->string('night_work');
            $table->string('permanence');
            $table->longText('description');
            $table->string('img');
            $table->string('ad_durtion_per_day');
            $table->string('advertiser_name');
            $table->bigInteger('phone_number');
            $table->string('mobile');
            $table->string('email');
            $table->string('advertiser_city');
            $table->string('advertiser_address');
            $table->enum('state',['pinned','refused','allowed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
