<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => (1), // usersテーブルにidカラムの値が1のユーザーが存在することが前提
             'title' => fake()->realText(),
             'content' => fake()->realText()
        ];
    }
}
