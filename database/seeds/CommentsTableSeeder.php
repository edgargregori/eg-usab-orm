<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //$table->unsignedInteger('autor_id')->nullable();
	    //$table->foreign('autor_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            //$table->text('comment');
            //$table->unsignedInteger('post_id');
 	Model::unguard();
        factory(App\Models\Comments\Comment::class,4)->create(); 
	Model::reguard();       
    }
}
