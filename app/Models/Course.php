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

    public function user() {
        return $this->belongsTo(User::class, 'author');
    }

    public function category() {
        return $this->belongsTo(CourseCategory::class);
    }

}
