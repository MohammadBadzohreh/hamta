<?php

namespace Database\Factories;

use App\Models\SchoolInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolInfoFactory extends Factory
{

    protected $model = SchoolInfo::class;

    public function definition()
    {
        return [
            "school_id" => $this->faker->numberBetween(1, 5),
            "order" => $this->faker->numberBetween(1, 100),
            "title" => $this->faker->text(10),
            "value" => $this->faker->text,
        ];
    }
}
