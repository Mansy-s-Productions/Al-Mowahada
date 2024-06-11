<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('services', function (Blueprint $table): void {
            $table->id();
            $table->string('image')->default('placeholder.png');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->text('content');
            $table->integer('user_id');
            $table->integer('is_featured')->default(0);
            $table->string('main_category');
            $table->string('type')->default('main');
            $table->string('parent_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('services');
    }
};
