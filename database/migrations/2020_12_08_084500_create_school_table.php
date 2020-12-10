<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolTable extends Migration
{


//order : number, // show numbers in order
//"شماره تماس امور آموزشی" g.e, // string : title
//value : string, // e.g "013-33554466"
//},
//]


    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->text("about_us")->nullable();
            $table->string("about_us_image")->nullable();
            $table->string("school_logo")->nullable();
            $table->string("telegram_link")->nullable();
            $table->string("instagram_link")->nullable();
            $table->string("email")->nullable();
            $table->text("school_address")->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
