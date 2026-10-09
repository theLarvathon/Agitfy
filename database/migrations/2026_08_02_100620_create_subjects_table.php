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
        Schema::create('subjects', function (Blueprint $table) {
             $table->id();
            $table->string('code', 6);              // 'MTK', 'FIS', dst — dipakai di badge tab
            $table->string('name');                  // 'Matematika'
            $table->string('slug')->unique();         // dipakai di URL: /mapel/{slug}
            $table->enum('category', ['sains', 'sosial', 'bahasa']); // menentukan warna tab-badge
            $table->unsignedInteger('order')->default(0); // urutan tampil di grid landing
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
