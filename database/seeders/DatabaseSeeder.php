<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'nama' => 'zico padalino',
            'email' => 'zico.padalino@untirta.ac.id',
            'jabatan' => 'Admin',
            'password' => Hash::make('zicopadalino22'),
            'is_tugas' => false,
        ]);
        User::create([
            'nama' => 'fidya fariha',
            'email' => 'fidya.fariha@untirta.ac.id',
            'jabatan' => 'Admin',
            'password' => Hash::make('fidyafariha30'),
            'is_tugas' => false,
        ]);
    }
}
