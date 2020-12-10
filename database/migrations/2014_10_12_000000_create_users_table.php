<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('email')->unique();
            $table->string("verified_code")->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->string('password')->nullable();
            $table->enum("access_level", User::$TYPES)->default(User::USER_STUDENT);
            $table->string("post",150)->nullable();
            $table->string("feild")->nullable();
            $table->string("grade")->nullable();
            $table->string("national_code")->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
