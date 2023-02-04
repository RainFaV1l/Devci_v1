<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonVideosBundle extends Model
{
    use HasFactory;

    // Ручное связывание модели с таблицой
    protected $table = 'lesson_videos_bundles';
    // Разрешение на запросы
    protected $guarded = false;
}
