<?php

use App\User;
use App\Models\Posts\Post;
use Faker\Generator as Faker;
            //$table->unsignedInteger('autor_id')->nullable();
	    //$table->foreign('autor_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            //$table->text('comment');
            //$table->unsignedInteger('post_id');

$factory->define(App\Models\Comments\Comment::class, function (Faker $faker) {

	$autor  = User::inRandomOrder()->get();
	$post  = Post::inRandomOrder()->get();
    return [
	'autor_id' => $autor->first()->id,
	'post_id'=> $post->first()->id,
       	'comment' =>  'comment' . 'author_id' . $autor->first()->id . 'post_id' . $post->first()->id
	];
});
