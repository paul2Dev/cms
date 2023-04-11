<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Widget>
 */
class WidgetFactory extends Factory
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
            'type' => $this->generateType(),
            'content' => $this->generateContent(),
            'content_type' => '',
            'content_id' => 0,
            'order' => 1,
        ];
    }

    protected function generateType(): string
    {
        $types = ['text', 'image', 'video', 'audio', 'link', 'file', 'code', 'map', 'form'];

        return $types[array_rand($types)];
    }

    protected function generateContent() {
        $type = $this->generateType();

        switch ($type) {
            case 'text':
                return $this->faker->paragraph();
            case 'image':
                return $this->faker->imageUrl();
            case 'video':
                return $this->faker->url();
            case 'audio':
                return $this->faker->url();
            case 'link':
                return $this->faker->url();
            case 'file':
                return $this->faker->url();
            case 'code':
                return $this->faker->text();
            case 'map':
                return $this->faker->address();
            case 'form':
                return $this->faker->url();
        }
    }
}
