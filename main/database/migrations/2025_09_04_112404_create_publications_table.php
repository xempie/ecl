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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('authors'); // Display authors as they appear in publication
            $table->string('journal')->nullable();
            $table->string('conference')->nullable();
            $table->integer('year');
            $table->string('volume')->nullable();
            $table->string('pages')->nullable();
            $table->string('doi')->nullable();
            $table->string('url')->nullable();
            $table->text('abstract')->nullable();
            $table->enum('type', ['journal', 'conference', 'book_chapter', 'workshop', 'preprint'])->default('journal');
            $table->enum('status', ['published', 'in_press', 'submitted', 'under_review'])->default('published');
            $table->string('image')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->integer('citation_count')->default(0);
            $table->date('publication_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
