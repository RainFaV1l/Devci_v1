<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_videos_bundles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedBigInteger('video_id');
            $table->timestamps();

            // Указываем на связь таблицы lesson_files_bundles с таблицой lessons
            $table->index('lesson_id', 'lesson_videos_bundle_lesson_idx');
            $table->foreign('lesson_id', 'lesson_videos_bundle_lesson_fk')->on('lessons')->references('id');

            // Указываем на связь таблицы lesson_files_bundles с таблицой lesson_files
            $table->index('video_id', 'lesson_videos_bundle_lesson_video_idx');
            $table->foreign('video_id', 'lesson_videos_bundle_lesson_video_fk')->on('lesson_videos')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_videos_bundles');
    }
};
