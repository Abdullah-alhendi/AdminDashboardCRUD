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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incremental Primary Key
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('mobile_number')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('photo')->nullable(); // Store image path
            $table->timestamps(); // Created_at & Updated_at
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
