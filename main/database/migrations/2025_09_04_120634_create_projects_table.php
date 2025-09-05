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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('status')->default('active'); // active, completed, on_hold
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('funding_source')->nullable();
            $table->decimal('budget', 12, 2)->nullable();
            $table->string('project_type')->default('research'); // research, development, collaboration
            $table->string('url')->nullable();
            $table->string('repository_url')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->integer('position_order')->default(0);
            $table->timestamps();
            
            $table->index(['status', 'is_featured']);
            $table->index('position_order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
