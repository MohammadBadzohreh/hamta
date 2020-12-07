<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(PassportTableSeeder::class);
        $this->call(SliderTableSeeder::class);

    }
}
