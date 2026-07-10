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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('talk_id')->constrained('talks')->cascadeOnDelete();
            $table->integer('score');
            $table->text('liked_comment')->nullable();
            $table->text('change_comment')->nullable();
            $table->string('device_signature');
            $table->timestamps();

            // Compound unique index to prevent duplicate votes from the same device on the same talk
            $table->unique(['talk_id', 'device_signature']);
            $table->index('device_signature');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
