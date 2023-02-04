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
        Schema::create('lesson_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('lesson_users_status_id');
            $table->timestamps();

            // Указываем на связь таблицы lesson_users с таблицой lessons
            $table->index('lesson_id', 'lesson_user_lesson_idx');
            $table->foreign('lesson_id', 'lesson_user_lesson_fk')->on('lessons')->references('id');

            // Указываем на связь таблицы lesson_users с таблицой users
            $table->index('user_id', 'lesson_user_user_idx');
            $table->foreign('user_id', 'lesson_user_user_fk')->on('users')->references('id');

            // Указываем на связь таблицы lesson_users с таблицой users
            $table->index('lesson_users_status_id', 'lesson_user_lesson_users_status_idx');
            $table->foreign('lesson_users_status_id', 'lesson_user_lesson_users_status_fk')->on('lesson_users_statuses')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_users');
    }
};
