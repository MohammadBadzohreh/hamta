<?php

namespace Database\Seeders;

use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{

    public function run()
    {
        PostFactory::times(10)->create();
    }
}
