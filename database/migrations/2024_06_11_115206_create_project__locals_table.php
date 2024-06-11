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
        Schema::create('project__locals', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->string('title_value');
            $table->text('description_value')->nullable();
            $table->text('content_value');
            $table->string('location_value')->nullable();
            $table->string('locale')->default('ar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project__locals');
    }
};
