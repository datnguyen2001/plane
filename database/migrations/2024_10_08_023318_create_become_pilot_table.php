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
        Schema::create('become_pilot', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('content');
            $table->string('title_one')->nullable();
            $table->string('name_1')->nullable();
            $table->string('src_1')->nullable();
            $table->string('content_1')->nullable();
            $table->string('name_2')->nullable();
            $table->string('src_2')->nullable();
            $table->string('content_2')->nullable();
            $table->string('name_3')->nullable();
            $table->string('src_3')->nullable();
            $table->string('content_3')->nullable();
            $table->string('name_4')->nullable();
            $table->string('src_4')->nullable();
            $table->string('content_4')->nullable();
            $table->string('name_5')->nullable();
            $table->string('src_5')->nullable();
            $table->string('content_5')->nullable();
            $table->string('name_6')->nullable();
            $table->string('src_6')->nullable();
            $table->string('content_6')->nullable();
            $table->string('title_two')->nullable();
            $table->longText('content_two')->nullable();
            $table->string('title_three')->nullable();
            $table->longText('content_three')->nullable();
            $table->string('title_four')->nullable();
            $table->longText('content_four')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('become_pilot');
    }
};
