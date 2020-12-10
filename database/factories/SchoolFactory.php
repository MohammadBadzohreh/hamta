<?php

namespace Database\Factories;

use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = School::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "about_us" => $this->faker->text(20),
            "about_us_image" => $this->faker->url,
            "school_logo" => $this->faker->text(20),
            "telegram_link" => $this->faker->url,
            "instagram_link" => $this->faker->url,
            "email" => $this->faker->email,
            "school_address" => $this->faker->text,
        ];
    }
}
