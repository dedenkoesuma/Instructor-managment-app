<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Membuat pengguna dengan peran 'trainer'
        User::factory()->create(['role' => 'trainer']);

        // Membuat pengguna dengan peran 'participant'
        User::factory()->create(['role' => 'participant']);

        // Mendapatkan ID tertinggi dari tabel users
        $maxId = User::max('id') ?? 0;

        // Menetapkan ID baru dengan tambahan 1 dari ID tertinggi
        $nextId = $maxId + 1;

        // Memasukkan data pengguna dengan ID baru
        DB::table('users')->insert([
            'id' => $nextId,
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'role' => 'trainer',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

