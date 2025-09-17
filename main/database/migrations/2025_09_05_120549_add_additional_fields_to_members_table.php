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
        Schema::table('members', function (Blueprint $table) {
            $table->enum('member_type', ['faculty', 'staff', 'student', 'alumni', 'collaborator', 'virtual_intern'])->default('faculty')->after('member_category');
            $table->string('organization')->nullable()->after('title');
            $table->string('university')->nullable()->after('organization');
            $table->string('location')->nullable()->after('university');
            $table->string('current_position')->nullable()->after('location');
            $table->string('internship_period')->nullable()->after('current_position');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn(['member_type', 'organization', 'university', 'location', 'current_position', 'internship_period']);
        });
    }
};
