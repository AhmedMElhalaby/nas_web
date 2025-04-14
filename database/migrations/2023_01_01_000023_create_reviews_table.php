<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('worker_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('order_item_id')->constrained()->onDelete('cascade');
            $table->tinyInteger('rate');
            $table->text('review')->nullable();
            $table->timestamp('reviewed_at');
            $table->timestamps();
            $table->unique(['worker_id', 'order_item_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
