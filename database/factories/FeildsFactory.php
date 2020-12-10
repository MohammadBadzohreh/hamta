<?php

namespace Database\Factories;

use App\Models\Feild;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeildsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Feild::class;


    public function definition()
    {
        return [
            "title" => $this->faker->text(7),
        ];
    }
}
