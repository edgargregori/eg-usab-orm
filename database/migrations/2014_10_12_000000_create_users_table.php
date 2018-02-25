<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
<<<<<<< HEAD
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedTinyInteger('access')->default(0);
=======
            $table->string('name');
>>>>>>> f4d887ac00fcaba6069cc713b52ec7c9f44fec95
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
<<<<<<< HEAD
            //$table->timestamp('created_at');
            //$table->timestamp('updated_at');
            $table->timestamp('deleted_at')->nullable();
=======
>>>>>>> f4d887ac00fcaba6069cc713b52ec7c9f44fec95
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
