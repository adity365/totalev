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
        Schema::create('job_seekers', function (Blueprint $table) {
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
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->string('pincode')->nullable();
            $table->string('street')->nullable();
            $table->string('referer_email')->nullable();
            $table->string('privacy')->nullable();
            $table->string('newsletter')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('work_status')->nullable();
            $table->string('experience_years')->nullable();
            $table->string('education')->nullable();
            $table->string('job_type')->nullable();
            $table->string('job_category')->nullable();
            $table->string('job_subcategory')->nullable();
            $table->string('job_sub_subcategory')->nullable();
            $table->json('job_roles')->nullable();
            $table->json('job_skills')->nullable();
            $table->string('cv_path')->nullable();
            $table->string('profile_photo_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seekers');
    }
};
