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
        Schema::create('training_courses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->longText('describe');
            $table->string('src');
            $table->longText('why_choose1')->nullable();
            $table->longText('why_choose2')->nullable();
            $table->longText('why_choose3')->nullable();
            $table->string('age')->nullable();
            $table->string('education')->nullable();
            $table->string('foreign_language')->nullable();
            $table->longText('health')->nullable();
            $table->longText('content');
            $table->integer('display')->default(1);
            $table->integer('type')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_courses');
    }
};
