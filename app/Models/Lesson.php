<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    // Ручное связывание модели с таблицой
    protected $table = 'lessons';
    // Разрешение на запросы
    protected $guarded = false;
}
