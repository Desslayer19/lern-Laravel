<?php

namespace Database\Factories;

use App\Models\Slag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Slag>
 */
class SlagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $slag = fake()->sentence(rand(3,5));
        return [
            "jenis_slag" => Str::slug($slag),
            "nama_slag" => $slag
        ];
    }
}
