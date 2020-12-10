<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->string("abstract")->nullable();
            $table->string("image");
            $table->text("description")->nullable();
            $table->timestamps();
            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete("CASCADE")
                ->onUpdate("CASCADE");
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
