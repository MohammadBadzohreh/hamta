<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            "first_name" => "Mohammad",
            "last_name" => "badzohreh",
            "email" => "badzohreee@gmail.com",
            "password" => '$2y$10$XDan7cWDE2ulaz2zaZSvvew4t4AuqLFyBwudW55ApYB5Op.R5CxKi',
            "access_level" => "manager",
            "verified_code" => null,
            "verified_at" => "2020-11-26 09:04:23",
        ]);
    }
}
