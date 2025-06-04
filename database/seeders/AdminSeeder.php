<?php

namespace Database\Seeders;
use App\Models\User;
use App\Enums\UserRole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Admin User',
            'email'=>'admin@gmail.com',
            'role'=>UserRole::Admin,
            'password'=> Hash::make("123456789"),
            'adresse'=>'Grand Yoff',
            'telephone'=>'+221 77 355 65 00',
        ]);

    }
}
