<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'sections' => [
                [
                    'type' => 'text',
                    'content' => $this->faker->paragraphs(3, true),
                ],
                [
                    'type' => 'image',
                    'content' => $this->faker->imageUrl(),
                ],
                [
                    'type' => 'text',
                    'content' => $this->faker->paragraphs(3, true),
                ],
            ],
            'template' => 'default',
            'user_id' => 1,
            'published' => true,
        ];
    }
}
