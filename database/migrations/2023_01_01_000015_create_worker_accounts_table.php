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
        Schema::create('worker_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('holder_name');
            $table->string('institution_name');
            $table->string('wallet_number');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('worker_accounts');
    }
};
