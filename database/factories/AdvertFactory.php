<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Advert>
 */
class AdvertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->sentence(3);
        return [
            'category_id' => fake()->numberBetween(1, 6),
            'institution_id' => fake()->numberBetween(1, 10),
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => fake()->paragraph(5),
            'deadline' => now()->addDays(30),
            'visible' => true,
            'location' => fake()->city(),
            'sector' => fake()->word(),
            'eductaion_level' => fake()->randomElement(['Diploma', 'Bachelor', 'Master', 'Doctorate']),
            'desired_experience' => fake()->word(),
            'contract_type' => fake()->randomElement(['Full-Time', 'Part-Time', 'Freelance', 'Contract', 'Internship', 'Apprenticeship']),
            'number_of_positions' => $this->faker->numberBetween(1, 10),

        ];
    }
}
