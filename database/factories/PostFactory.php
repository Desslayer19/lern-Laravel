<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Post>
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
        $judul = fake()->sentence(rand(6,8));
        return [
            'slag' => Str::slug($judul, '-'),
            'judul' => $judul,
            'pembuat' => fake()->name(),
            'tanggal' => fake()->date('Y-m-d'),
            'article' => fake()->text(),
        ];
    }
}
