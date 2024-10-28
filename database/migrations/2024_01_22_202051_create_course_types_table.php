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
        Schema::create('course_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->smallInteger('sort')->nullable(false)->comment('排序(小到大)');
            $table->string('name')->nullable(false)->comment('課程名稱');
            $table->string('content')->nullable(false)->comment('課程描述');
            $table->string('img_path')->nullable(false)->comment('圖片位置');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_types');
    }
};
