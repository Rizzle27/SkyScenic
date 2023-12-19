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
        Schema::create('users', function(Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('avatar')->nullable();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['regular', 'admin', 'superadmin'])->default('regular');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('downloads_used')->default(0);

            $table->date('sub_start')->nullable();
            $table->date('sub_end')->nullable();

            $table->foreignId('id_subscription')->nullable()->constrained('subscriptions')->cascadeOnUpdate()->cascadeOnDelete();
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
