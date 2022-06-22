<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "judul" => $this->faker->sentence(mt_rand(2, 5)),
            "slug" => $this->faker->slug(),
            "excerpt" => $this->faker->paragraph(),
            "body" => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(8, 15))) . '</p>',
            // "body" => collect($this->faker->paragraphs(mt_rand(8, 15)))->map(fn($p)=>'<p>$p</p>')->implode(''),
            "category_id" => mt_rand(1, 3),
            "user_id" => mt_rand(1, 3)
        ];
    }
}
