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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('email')->unique()->nullable();
            $table->string('phone', 50)->nullable();
            $table->text('bio')->nullable();
            $table->string('image')->nullable();
            $table->enum('lab_location', ['auckland', 'adelaide', 'director'])->default('auckland');
            $table->string('member_category', 20)->default('member');
            $table->integer('position_order')->default(0);
            $table->enum('status', ['active', 'inactive', 'alumni'])->default('active');
            $table->string('social_linkedin')->nullable();
            $table->string('social_email')->nullable();
            $table->string('social_website')->nullable();
            $table->text('research_interests')->nullable();
            $table->text('qualifications')->nullable();
            $table->text('achievements')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
