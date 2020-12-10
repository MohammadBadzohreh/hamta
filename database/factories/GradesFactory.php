<?php

namespace Database\Factories;

use App\Models\Grade;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradesFactory extends Factory
{
    protected $model = Grade::class;

    public function definition()
    {
        return [
            "title" => $this->faker->text(7),
        ];
    }
}
