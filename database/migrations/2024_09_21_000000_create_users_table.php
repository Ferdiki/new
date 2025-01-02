<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->default(2);
            $table->string('username',100)->default('diki');
            $table->string('name',128)->default('Ferdiawan Diki Firmansyah');
            $table->string('email',128)->default('diki@gmail.com')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',128)->default(Hash::make('admin123'));
            $table->string('gambar', 128)->default('default.png');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
