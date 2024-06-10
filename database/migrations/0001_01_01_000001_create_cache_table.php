<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('cache', function (Blueprint $table): void {
            $table->string('key', 191)->notNull(); // Specify the length as 191
            $table->mediumText('value')->notNull();
            $table->integer('expiration')->notNull();
            $table->primary(['key']);
        });

        Schema::create('cache_locks', function (Blueprint $table): void {
            $table->string('key', 191)->notNull();
            $table->string('owner', 191)->notNull();
            $table->integer('expiration')->notNull();
            $table->primary(['key']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};
