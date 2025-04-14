<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('worker_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('id_front_image');
            $table->string('id_back_image');
            $table->string('personal_photo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('worker_documents');
    }
};