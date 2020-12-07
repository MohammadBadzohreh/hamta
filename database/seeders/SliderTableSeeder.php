<?php

namespace Database\Seeders;

use App\Models\Slider;
use Database\Factories\SliderFactory;
use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{

    public function run()
    {
        SliderFactory::times(3)->create();
    }
}
