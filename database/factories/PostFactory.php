<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Post::calss;

    
    public function definition()
    {
        return [
            'title' => $this-> faker->sentance,
            'content' => $this-> faker->paragragh,
            'created_at' => now()
        ];
    }
}
