<?php

namespace Database\Factories;

use App\Models\ClassRoom;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClassRoom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "teacher_id" => 1,
            "grade_id" => $this->faker->numberBetween(1, 3),
            "field_id" => $this->faker->numberBetween(1, 3),
            "title" => $this->faker->text(20),
        ];
    }
}
