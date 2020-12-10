<?php

namespace Database\Seeders;

use Database\Factories\SchoolInfoFactory;
use Illuminate\Database\Seeder;

class SchoolInfoSeeder extends Seeder
{
    public function run()
    {
        SchoolInfoFactory::times(20)->create();
    }
}



