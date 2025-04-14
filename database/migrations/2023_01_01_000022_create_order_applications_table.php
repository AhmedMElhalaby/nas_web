<?php

use App\Enums\OrderApplicationStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('worker_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('order_item_id')->constrained()->onDelete('cascade');
            $table->tinyInteger('status')->comment(enum_comment(OrderApplicationStatus::class))->default(OrderApplicationStatus::Pending->value);
            $table->timestamp('applied_at');
            $table->timestamps();
            $table->unique(['worker_id', 'order_item_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_applications');
    }
};
