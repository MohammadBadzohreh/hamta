<?php

namespace Database\Factories;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "order"=>$this->faker->numberBetween(1,20),
            "title"=>$this->faker->text(30),
            "link"=>$this->faker->url,
            "image"=>$this->faker->shuffleString(),
            "description"=>$this->faker->text(50),
        ];
    }
}
