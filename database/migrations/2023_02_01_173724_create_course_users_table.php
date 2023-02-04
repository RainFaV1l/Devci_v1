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
        Schema::create('course_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('course_users_status_id');
            $table->timestamps();

            // Указываем на связь таблицы course_users с таблицой users
            $table->index('user_id', 'course_user_user_idx');
            $table->foreign('user_id', 'course_user_user_fk')->on('users')->references('id');

            // Указываем на связь таблицы course_users с таблицой courses
            $table->index('course_id', 'course_user_course_idx');
            $table->foreign('course_id', 'course_user_course_fk')->on('courses')->references('id');

            // Указываем на связь таблицы course_users с таблицой groups
            $table->index('group_id', 'course_user_group_idx');
            $table->foreign('group_id', 'course_user_group_fk')->on('groups')->references('id');

            // Указываем на связь таблицы course_users с таблицой course_users_statuses
            $table->index('course_users_status_id', 'course_user_course_users_status_idx');
            $table->foreign('course_users_status_id', 'course_user_course_users_status_fk')->on('course_users_statuses')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_users');
    }
};
