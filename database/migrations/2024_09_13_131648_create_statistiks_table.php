<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('statistiks', function (Blueprint $table) {
            $table->id();
            $table->string('siswa');
            $table->string('guru');
            $table->string('karyawan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('statistiks');
    }
};
