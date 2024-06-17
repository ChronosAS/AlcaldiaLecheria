<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        \App\Models\Team::factory()->create([
            'name' => 'Admin',
            'user_id' => $user->id,
            'personal_team' => true
        ]);

        \App\Models\Team::factory()->create([
            'name' => 'Prensa',
            'user_id' => $user->id,
            'personal_team' => true
        ]);

        \App\Models\Team::factory()->create([
            'name' => 'Despacho',
            'user_id' => $user->id,
            'personal_team' => true
        ]);

        \App\Models\News\Post::factory(20)->create([
            'user_id' => (User::where('name','Test User')->first())->id
        ]);
    }
}
