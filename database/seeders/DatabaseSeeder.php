<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Specialization;
use App\Models\Status;
use App\Models\Typepay;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Typepay::create([
            'name' => 'наличные',
        ]);
        
        Typepay::create([
            'name' => 'банковская карта',
        ]);
        
        Typepay::create([
            'name' => 'безналичный расчет/онлайн',
        ]);

        Specialization::create([
            'name' => 'Терапевт',
        ]);
        
        Specialization::create([
            'name' => 'Стоматолог',
        ]);
        
        Specialization::create([
            'name' => 'Дерматолог',
        ]);
        
        Specialization::create([
            'name' => 'Невролог',
        ]);

        Doctor::create([
            'name' => 'Иванов Иванович Иван',
        ]);

        Doctor::create([
            'name' => 'Лапухов Федорович Максим',
        ]);

        Doctor::create([
            'name' => 'Орлов Эфимович Авдей',
        ]);

        Doctor::create([
            'name' => 'Зайцева Львовна Эфимия',
        ]);

        Status::create([
            'name' => 'Новая',
        ]);
        
        Status::create([
            'name' => 'Подтверждена',
        ]);
        
        Status::create([
            'name' => 'Приём состоялся',
        ]);
        
        Status::create([
            'name' => 'Отменена',
        ]);

        User::create([
            'login' => 'administrator',
            'password' => Hash::make('administrator'),
            'name' => 'admin',
            'last_name' => 'admin',
            'middle_name' => 'admin',
            'phone' => '79999999999',
            'role' => 'admin',
            'email' => 'admin@admin.com',
        ]);
    }
}
