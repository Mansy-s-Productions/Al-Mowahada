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
        Schema::create('blog__locals', function (Blueprint $table) {
            $table->id();
            $table->integer('blog_id');
            $table->string('title_value');
            $table->string('description_value');
            $table->text('content_value');
            $table->string('locale')->default('ar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog__locals');
    }
};
