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
        Schema::create('applications', function (Blueprint $table) { 
            $table->id();
     $table->foreignId('user_id')->constrained()->onDelete('cascade');
$table->foreignId('job_id')->constrained()->onDelete('cascade');
$table->text('cover_letter')->nullable();
$table->string('resume_path')->nullable();
            $table->string('status')->default('pending'); // e.g. pending, reviewed, accepted, rejected
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
