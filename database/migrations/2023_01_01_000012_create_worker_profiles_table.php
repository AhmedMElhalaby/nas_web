<?php

use App\Enums\Gender;
use App\Enums\MaritalStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('worker_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('third_name');
            $table->string('last_name');
            $table->string('referral_source');
            $table->date('birthdate');
            $table->string('governorate');
            $table->string('district');
            $table->string('location');
            $table->decimal('location_lat', 10, 7)->nullable();
            $table->decimal('location_long', 10, 7)->nullable();
            $table->foreignId('nationality_id')->constrained();
            $table->string('national_id');
            $table->tinyInteger('gender')->comment(enum_comment(Gender::class));
            $table->tinyInteger('marital_status')->comment(enum_comment(MaritalStatus::class));
            $table->decimal('avg_rate', 3, 2)->default(0);
            $table->integer('total_worked_hours')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('worker_profiles');
    }
};