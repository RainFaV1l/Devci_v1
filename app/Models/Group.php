<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory;
    //    use SoftDeletes;

    // Ручное связывание модели с таблицой
    protected $table = 'groups';
    // Разрешение на запросы
    protected $guarded = false;

    public function teacher()
    {
        return $this->hasOne(User::class, 'id', 'teacher_id');
    }
}
