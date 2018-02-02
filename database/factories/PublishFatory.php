<?php
//use  App\Models\Publishes\Publish;
use Faker\Generator as Faker;

	//$faker = Faker $faker->randomElement($array = array('video', 'sound', 'photos', 'text'));
	$factory->define(\App\Models\Publishes\Publish::class, function (Faker $faker) {
	$label = $faker->randomElement($array = array('video', 'sound', 'photos', 'text'));
    return [
	'slug' => 'slug' . $label,
	'label' => 'label' . $label,
	'is_publish' => rand(0,1)
    ];
});
