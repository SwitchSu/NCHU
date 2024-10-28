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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('course_type_id')->comment('course_types的一對多');
            $table->string('name')->comment('課程名稱');
            $table->dateTime('start_time')->comment('開始時間(挑出最新四筆)');
            $table->dateTime('end_time')->comment('報名截止時間');
            $table->integer('price')->default(0)->comment('課程價格');
            $table->text('content')->comment('課程描述');
            $table->text('link')->comment('報名連結');
            $table->string('img_path')->comment('圖片路徑');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
