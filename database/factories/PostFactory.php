<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker-> title(),
            'content' => $this->faker-> paragraph(),
            'created_at' => now(),
        ];
    }
}

