<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModule extends Model
{
    use HasFactory;

    // Ручное связывание модели с таблицой
    protected $table = 'user_modules';
    // Разрешение на запросы
    protected $guarded = false;
}
