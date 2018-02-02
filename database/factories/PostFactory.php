<?php

use App\Models\Languages\Language;
use App\Models\Photos\Photo;
use Faker\Generator as Faker;

  $photos = Photo::get();
  $languages = Language::get();
  $factory->define(App\Models\Posts\Post::class, function (Faker $faker) {
    return [
            'autor_id' => rand(1,4),
            'publishes_id'=> rand(1,4)
    ];
});
