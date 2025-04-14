<?php

use App\Enums\OrderStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('work_period_id')->constrained();
            $table->date('scheduled_date');
            $table->string('time_slot');
            $table->text('notes')->nullable();
            $table->decimal('tax_amount', 10, 2)->default(0);
            $table->decimal('total_price', 10, 2);
            $table->tinyInteger('status')->comment(enum_comment(OrderStatus::class))->default(OrderStatus::Draft->value);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
