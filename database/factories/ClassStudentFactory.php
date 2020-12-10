<?php

namespace Database\Factories;

use App\Models\ClassStudent;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassStudentFactory extends Factory
{

    protected $model = ClassStudent::class;

    public function definition()
    {
        return [
            "student_id" => 1,
            "class_id" => $this->faker->numberBetween(1, 4),
        ];
    }
}
