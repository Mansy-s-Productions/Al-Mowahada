<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('projects', function (Blueprint $table): void {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('image')->default('placeholder.png');
            $table->integer('category_id');
            $table->text('content');
            $table->string('clients')->nullable();
            $table->string('location')->nullable();
            $table->string('bua')->nullable();
            $table->string('date')->nullable();
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('projects');
    }
};
