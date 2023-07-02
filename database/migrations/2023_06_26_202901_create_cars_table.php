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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('company');
            $table->string('reset_model');
            $table->string('model_year');
            $table->string('car_color');
            $table->string('power');
            $table->bigInteger('passengers');
            $table->string('drive_type');
            $table->bigInteger('speedmotors');
            $table->string('origin');
            $table->bigInteger('price');
            $table->string('ad_durtion_per_day');

            $table->enum('driving_license',['فلسطينية','نمرة الصفراء']);
            $table->enum('fuel_type', ['ديزل','هايبرد','بنزين']);
            $table->enum('lime_type',['عادي','اوتوماتيكي','نصف اوتوماتيكي']);
            $table->enum('glass',['يدوي','الكتروني']);
            $table->enum('shown',['للبيع فقط','للتبديل فقط','للبيع أو التبديل']);
            $table->enum('pay_method',['نقدا فقط ','إمكانية التقسيط']);
            $table->string('extras');
            $table->longText('description');
            $table->string('img');
            $table->string('advertiser_name');
            $table->bigInteger('phone_number');
            $table->string('mobile');
            $table->string('email');
            $table->string('city');
            $table->string('address');
            $table->enum('state',['refused','allowed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
