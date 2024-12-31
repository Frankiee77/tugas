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
        Schema::create('m_profiles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('biodata');
            $table->integer('age');
            $table->text('address')->nullable();
            $table->string('avatar', 255)->nullable();
            $table->uuid('user_id');
            $table->foreignId('user_id')->constrained('m_users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_profiles');
    }
};