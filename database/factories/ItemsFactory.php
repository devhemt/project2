<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Items>
 */
class ItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $models = \App\Models\Items::class;
    public function definition()
    {
        return [
            'images' => '1.jpg 2.jpg 3.jpg',
            'name' => $this->faker->title,
            'description' => $this->faker->paragraph,
            'price' => '200',
            'created_at' => now(),
        ];
    }
}
