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
        Schema::create('group_modules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('module_number')->unique();
            $table->timestamps();

            // Указываем на связь таблицы group_modules с таблицой courses
            $table->index('course_id', 'group_module_course_idx');
            $table->foreign('course_id', 'group_module_course_fk')->on('courses')->references('id');

            // Указываем на связь таблицы group_modules с таблицой groups
            $table->index('group_id', 'group_module_group_idx');
            $table->foreign('group_id', 'group_module_group_fk')->on('groups')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_modules');
    }
};
