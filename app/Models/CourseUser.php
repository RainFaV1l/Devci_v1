<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    use HasFactory;

    // Ручное связывание модели с таблицой
    protected $table = 'course_users';
    // Разрешение на запросы
    protected $guarded = false;
}
