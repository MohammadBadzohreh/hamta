<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
//
//title : string,
//grade : number, // id code e.g 12
//field : number, // id code e.g 12
//teacher_name : string, // e.g "خاکیه استاد"
//student_number : number, // e.g 31


    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("teacher_id")->unsigned();
            $table->bigInteger("grade_id")->unsigned();
            $table->bigInteger("field_id")->unsigned();
            $table->string("title", 100);
            $table->timestamps();

            $table->foreign("teacher_id")
                ->references("id")
                ->on("users")
                ->onDelete("CASCADE")
                ->onUpdate("CASCADE");

            $table->foreign("grade_id")
                ->references("id")
                ->on("grades")
                ->onDelete("CASCADE")
                ->onUpdate("CASCADE");

            $table->foreign("field_id")
                ->references("id")
                ->on("feildes")
                ->onDelete("CASCADE")
                ->onUpdate("CASCADE");
        });
    }


    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
