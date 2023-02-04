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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->unsignedFloat('price')->nullable();
            $table->string('author')->unique();
            $table->unsignedBigInteger('course_category_id')->nullable();
            $table->string('course_icon_path')->nullable();
            $table->string('course_banner_path')->nullable();
            $table->timestamps();

            // Указываем на связь таблицы courses с таблицой course_categories
            $table->index('course_category_id', 'course_category_idx');
            $table->foreign('course_category_id', 'course_category_fk')->on('course_categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
