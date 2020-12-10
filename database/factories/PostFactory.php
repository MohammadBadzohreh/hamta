<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    protected $model = Post::class;

    public function definition()
    {
        return [
            "user_id" => 1,
            "abstract" => $this->faker->text(10),
            "image" => $this->faker->url,
            "description" => $this->faker->text,

        ];
    }
}
