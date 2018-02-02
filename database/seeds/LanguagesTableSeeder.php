<?php

use Illuminate\Database\Seeder;
use App\Models\Languages\Language;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//Categories-Pivot: label:1. castellano de españa  2. Castellano mexico 3. Cast-Bolivia. iSlug: 1 . es_es, 3. es_mx, 4, es_bo Description: 1. Castellano hablado en España del cual desprenden los demas. 2. Castellano...
        // label: ISO 693-1 code, ISO: es, en, de, fr
	$languages = [
		['label' => 'ISO 639-1 castellano', 'iso6391' => 'es'],
		['label' => 'ISO 639-1 english', 'iso6391' => 'en']
	];
	
	foreach ($languages as $value) {
	  Language::create($value);
	}

    }
}
