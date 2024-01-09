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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code_phone', 3);
            $table->string('phone');
            $table->string('street');
            $table->string('zip_code', 5);
            $table->time('open_workday')->default('10:00:00');
            $table->time('close_workday')->default('20:00:00');
            $table->time('open_sunday')->default('12:00:00');
            $table->time('close_sunday')->default('18:00:00');
            $table->text('google_maps');
            $table->foreignId('city_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
