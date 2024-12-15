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
        Schema::create('qiraats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ayah_id')->constrained();
            $table->string('qiraat_name');
            $table->string('riwayah');
            $table->text('qiraat_ayah');
            $table->string('audio_path');
            $table->text('penjelasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qiraats');
    }
};
