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
        Schema::create('lesson_modules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedBigInteger('module_id');
            $table->timestamps();

            // Указываем на связь таблицы lesson_modules с таблицой lessons
            $table->index('lesson_id', 'lesson_module_lesson_idx');
            $table->foreign('lesson_id', 'lesson_module_lesson_fk')->on('lessons')->references('id');

            // Указываем на связь таблицы lesson_modules с таблицой group_modules
            $table->index('module_id', 'lesson_module_group_module_idx');
            $table->foreign('module_id', 'lesson_module_group_module_fk')->on('group_modules')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_modules');
    }
};
