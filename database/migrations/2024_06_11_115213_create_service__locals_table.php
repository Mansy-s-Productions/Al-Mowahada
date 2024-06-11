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
        Schema::create('service__locals', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id');
            $table->string('title_value');
            $table->text('content_value')->nullable();
            $table->text('description_value')->nullable();
            $table->string('locale')->default('ar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service__locals');
    }
};
