<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Widget;

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
            'widgets' => $this->generateWidgets(),
            'template' => 'default',
            'user_id' => 1,
            'published' => true,
        ];
    }

    private function generateWidgets(): array
    {
        $widgets = Widget::factory(5)->create();

        return $widgets->toArray();

    }
}
