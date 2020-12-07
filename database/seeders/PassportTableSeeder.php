<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PassportTableSeeder extends Seeder
{

    public function run()
    {
        DB::table("oauth_clients")
            ->insert([
                "name"=>"hamta Personal Access Client",
                "secret"=>"iRmSkUKrnSYBaVkChtOVgmZrHPMLZ7C1p14biG15",
                "provider"=>null,
                "redirect"=>"http://localhost",
                "personal_access_client"=>1,
                "password_client"=>0,
                "revoked"=>0,

            ]);

        DB::table("oauth_clients")
            ->insert([
                "name"=>"hamta Password Grant Client",
                "secret"=>"rSbY16FUhjMQR6hAcNBXTSWUmwlzlsS1OLGAGqeN",
                "provider"=>"users",
                "redirect"=>"http://localhost",
                "personal_access_client"=>0,
                "password_client"=>1,
                "revoked"=>0,

            ]);
    }
}
