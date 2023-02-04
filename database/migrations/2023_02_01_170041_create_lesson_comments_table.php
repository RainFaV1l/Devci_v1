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
        Schema::create('lesson_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('student_id');
            $table->string('text');
            $table->timestamps();

            // Указываем на связь таблицы lesson_comments с таблицой lessons
            $table->index('lesson_id', 'lesson_comment_lesson_idx');
            $table->foreign('lesson_id', 'lesson_comment_lesson_fk')->on('lessons')->references('id');

            // Указываем на связь таблицы lesson_comments с таблицой users
            $table->index('teacher_id', 'lesson_comment_teacher_idx');
            $table->foreign('teacher_id', 'lesson_comment_teacher_fk')->on('users')->references('id');

            // Указываем на связь таблицы lesson_comments с таблицой lessons
            $table->index('student_id', 'lesson_comment_student_idx');
            $table->foreign('student_id', 'lesson_comment_student_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_comments');
    }
};
