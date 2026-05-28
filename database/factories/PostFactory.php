<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Slag;
use App\Models\User;
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
        $judul = fake()->sentence(rand(4,7));
        return [
            'slag' => Str::slug($judul, '-'),
            'judul' => $judul,
            'user_id' => User::factory(),
            'kategori_id' => Slag::factory(),
            'tanggal' => fake()->date('Y-m-d'),
            'article' => fake()->text(),
        ];
    }
}
