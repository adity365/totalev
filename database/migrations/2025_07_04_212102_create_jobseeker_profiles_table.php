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
        Schema::create('jobseeker_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jobseeker_id')->constrained('job_seekers')->onDelete('cascade');
            $table->string('job_category')->nullable();
            $table->string('job_subcategory')->nullable();
            $table->string('job_sub_subcategory')->nullable();
            $table->text('description')->nullable();
            $table->text('skills')->nullable(); // JSON or comma-separated
            $table->string('experience_level')->nullable();
            $table->string('education_level')->nullable();
            $table->string('resume_file')->nullable();
            $table->string('profile_picture')->nullable();
            $table->boolean('profile_completed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobseeker_profiles');
    }
};
