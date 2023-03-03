<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CourseCategory;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        UserRole::query()->create([
            'name' => 'Пользователь'
        ]);

        UserRole::query()->create([
            'name' => 'Преподаватель'
        ]);

        UserRole::query()->create([
            'name' => 'Администратор'
        ]);

        CourseCategory::query()->create([
            'name' => 'Веб'
        ]);

        CourseCategory::query()->create([
            'name' => 'Дизайн'
        ]);

        CourseCategory::query()->create([
            'name' => 'Этикет'
        ]);

         User::factory()->create([
             'name' => 'Админ',
             'surname' => 'Админ',
             'patronymic' => 'Админ',
             'tel' => '+7 (000) 000 0000',
             'role_id' => 3,
             'birthday_date' => '2023-03-12',
             'last_auth_date' => '2023-03-01',
             'email' => 'admin@example.com',
             'password' => Hash::make('adminadmin')
         ]);
    }
}
