<?php

namespace Database\Seeders;

use App\Models\News\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory(224)->create([
            'user_id' => (User::where('name','Admin')->first())->id
        ]);
    }
}
