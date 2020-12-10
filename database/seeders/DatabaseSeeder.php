<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(UserTableSeeder::class);
//        $this->call(PassportTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(SchoolTableSeeder::class);
        $this->call(SchoolInfoSeeder::class);
        $this->call(FeildTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(ClassTableSeeder::class);
        $this->call(ClassStudentSeeder::class);
    }
}

