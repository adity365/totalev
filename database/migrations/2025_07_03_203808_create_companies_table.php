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
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('otp_code')->nullable(); // For email OTP only
            $table->timestamp('otp_verified_at')->nullable(); // For email OTP only
            $table->string('company_name')->nullable();
            $table->string('company_type')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->string('pincode')->nullable();
            $table->string('street')->nullable();
            $table->string('referer_email')->nullable();
            $table->string('privacy')->nullable();
            $table->string('newsletter')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('position')->nullable();   
            $table->string('industry')->nullable();
            $table->string('company_profile')->nullable();
            $table->string('gst_no')->nullable();
            $table->string('website')->nullable();
            $table->string('logo_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
