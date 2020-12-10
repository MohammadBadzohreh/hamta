<?php

namespace Database\Seeders;

use Database\Factories\GradesFactory;
use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GradesFactory::times(20)->create();
    }
}
