<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    // Ручное связывание модели с таблицой
    protected $table = 'groups';
    // Разрешение на запросы
    protected $guarded = false;
}
