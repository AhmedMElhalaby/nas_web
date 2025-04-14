<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('worker_times', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('work_time_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->unique(['user_id', 'work_time_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('worker_times');
    }
};