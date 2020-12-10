<?php

namespace Database\Seeders;

use Database\Factories\FeildsFactory;
use Illuminate\Database\Seeder;

class FeildTableSeeder extends Seeder
{

    public function run()
    {
        FeildsFactory::times(20)->create();
    }
}
