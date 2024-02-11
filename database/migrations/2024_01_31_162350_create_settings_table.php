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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_title');
            $table->string('logo')->nullable();
            $table->string('phone');
            $table->string('whatsapp');
            $table->string('address');
            $table->string('email');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('linkedin');
            $table->longText('about');
            $table->longText('terms_and_conditions');
            $table->longText('privacy_and_policy');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
