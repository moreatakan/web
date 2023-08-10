<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoryizin;
use App\Models\Izin;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
    // User::factory(5)->create();
    DB::table('users')->insert([
        'name' => 'Hidayah',
        'email' => 'rhidayah602@gmail.com',
        'password' => Hash::make('123456')
    ]);

    // Post::factory(20)->create();

    // Izin::factory(20)->create();

    // Categoryizin::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
