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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->string('gambar');
            $table->enum('divisi', ['General Affair', 'Perlengkapan Malang', 'Kiyosi Malang', 'Divisi Surabaya', 'Supporting Paniai']);
            $table->string('nama');
            $table->string('email');
            $table->string('jurusan');
            $table->enum('pendidikan', ['SMP', 'SMA', 'SMK', 'Strata-1']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
