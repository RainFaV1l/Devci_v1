<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    //    use SoftDeletes;

    // Ручное связывание модели с таблицой
    protected $table = 'courses';
    // Разрешение на запросы
    protected $guarded = false;

    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author')->get()[0];
    }

    public function category()
    {
        return $this->hasOne(CourseCategory::class, 'id', 'course_category_id');
    }
}
