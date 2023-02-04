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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('task')->nullable();
            $table->string('description')->nullable();

//            $table->unsignedBigInteger('video_id')->nullable();
//            $table->unsignedBigInteger('file_id')->nullable();
            $table->unsignedBigInteger('course_id');

            $table->timestamps();

            // Указываем на связь таблицы lessons с таблицой videos
//            $table->index('video_id', 'lesson_lesson_videos_bundle_idx');
//            $table->foreign('video_id', 'lesson_lesson_videos_bundle_fk')->on('lesson_videos_bundles')->references('id');

            // Указываем на связь таблицы lessons с таблицой files
//            $table->index('file_id', 'lesson_lesson_files_bundle_idx');
//            $table->foreign('file_id', 'lesson_lesson_files_bundle_fk')->on('lesson_files_bundles')->references('id');

            // Указываем на связь таблицы lessons с таблицой courses
            $table->index('course_id', 'lesson_course_idx');
            $table->foreign('course_id', 'lesson_course_fk')->on('courses')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
};
