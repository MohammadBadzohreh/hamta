<?php

namespace Database\Seeders;

use Database\Factories\ClassFactory;
use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{

    public function run()
    {
        ClassFactory::times(10)->create();
    }
}
