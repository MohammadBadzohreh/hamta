<?php

namespace Database\Seeders;

use Database\Factories\ClassStudentFactory;
use Illuminate\Database\Seeder;

class ClassStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassStudentFactory::times(1)->create();
    }
}
