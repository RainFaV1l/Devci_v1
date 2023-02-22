<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

//        UserRole::factory()->create([
//            'name' => 'Пользователь'
//        ]);
//
//        UserRole::factory()->create([
//            'name' => 'Учитель'
//        ]);
//
//        UserRole::factory()->create([
//            'name' => 'Администратор'
//        ]);

         \App\Models\User::factory()->create([
             'name' => 'Admin',
             'surname' => 'Admin',
             'patronymic' => 'Admin',
             'tel' => '000',
             'role_id' => 3,
             'birthday_date' => '2003.01.01',
             'last_auth_date' => '2003.01.01',
             'email' => 'admin@example.com',
             'password' => Hash::make('adminadmin')
         ]);
    }
}
