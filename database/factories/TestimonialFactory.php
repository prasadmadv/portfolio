<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reviewer_name' => $this->faker->name,
            'reviewer_designation' => $this->faker->jobTitle,
            'reviewer_photo' => $this->faker->imageUrl,
            'review' => $this->faker->sentence(50),
            'rating' => (int)($this->faker->randomnumber(1))/2,
        ];
    }
}
