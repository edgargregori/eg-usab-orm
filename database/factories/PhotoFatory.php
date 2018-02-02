<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Photos\Photo::class, function (Faker $faker) {
	$random = rand(1,10);
    return [
	'filename' => 'filename' . $random,
        'type' => 'type' . $random
    ];
});
