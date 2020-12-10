<?php

namespace Database\Seeders;

use Database\Factories\SchoolFactory;
use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SchoolFactory::times(5)->create();
    }
}
