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
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nik',20);
            $table->string('nama',128);
            $table->string('status',20);
            $table->string('pendidikan_akhir',30);
            $table->string('pekerjaan',50);
            $table->string('nama_ibu',100);
            $table->string('nama_ayah',100);
            $table->string('no_kk',20);
            $table->string('nm_kepala_kel',50);
            $table->text('alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduks');
    }
};
