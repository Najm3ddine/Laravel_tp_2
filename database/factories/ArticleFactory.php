<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;
use App\Models\User;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_fr' => $this->faker->sentence,
            'title_en' => $this->faker->sentence,
            'body_fr' => $this->faker->paragraph(30),
            'body_en' => $this->faker->paragraph(30),
            'user_id' => User::factory()
        ];
    }
}
