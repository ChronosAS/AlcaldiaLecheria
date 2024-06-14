<?php

namespace Database\Factories\News;

use App\Enums\News\PostStatus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News\Posts>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->text(80);
        return [
            'title' => $title,
            'subtitle' => $this->faker->text(120),
            'content' => $this->faker->paragraph(10),
            'date' => fake()->date(),
            'subtitle' => fake()->text(120),
            'status' => fake()->randomElement(PostStatus::cases())->value,
            'content' => fake()->paragraph(10),
            'slug' =>   Str::slug($title),
        ];
    }
}
