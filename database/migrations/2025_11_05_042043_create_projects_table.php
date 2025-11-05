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
            $table->text('summary')->nullable();
            $table->string('cover_image')->nullable();   // e.g. storage path or /public path
            $table->json('gallery')->nullable();         // ["projects/foo-1.png", ...]
            $table->json('tech_stack')->nullable();      // ["Laravel","Livewire","Tailwind"]
            $table->string('repo_url')->nullable();
            $table->string('live_url')->nullable();
            $table->timestamps();
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
