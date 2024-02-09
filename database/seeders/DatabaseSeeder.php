<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      // Membuat pengguna dengan peran 'trainer'
      User::factory()->create(['role' => 'trainer']);

      // Membuat pengguna dengan peran 'participant'
      User::factory()->create(['role' => 'participant']);

      DB::table('users')->insert([
        'id' => 1,
        'name' => 'admin',
        'email' => 'admin@example.com',
        'password' => Hash::make('admin123'),
        'role'=> 'trainer',
        'created_at' => now(),
        'updated_at' => now()
    ]);
    }
}
