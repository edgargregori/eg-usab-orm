<?php

use Faker\Generator as Faker;

        // label: ISO 693-1 code, ISO: es, en, de, fr
$factory->define(Model::class, function (Faker $faker) {
	$lang = randomElement($array = array('es', 'en', 'fr', 'de'));
    return [
	'label' => 'ISO 6931' . $lang . 'code',
	'iso' => $lang
    ];
});
