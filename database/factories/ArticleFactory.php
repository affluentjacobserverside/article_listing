<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticleModel>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(Faker $faker)
    {
        return [
            'title' => $faker->text,
            'slug' => $faker->slug,
            'keywords' => $faker->text,
            'description' => $faker->text,
            'content' => $faker->paragraph,
        ];
    }
}
