<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategorieLanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//Categories-Pivot: label:1. castellano de españa  2. Castellano mexico 3. Cast-Bolivia. iSlug: 1 . es_es, 3. es_mx, 4, es_bo Description: 1. Castellano hablado en España del cual desprenden los demas. 2. Castellano...
 
 	$category_of_languages = [
		['categorie_id' => 1,'language_id' => 1, 'label'  =>'castellano de españa', 'slug' => 'eses', 'description' => 'desc-lang_id-1'],
		['categorie_id' => 2,'language_id' => 1, 'label'  =>'castellano de Bolivia', 'slug' => 'es_bo', 'description' => 'desc-lang_id-2'],
		['categorie_id' => 3,'language_id' => 1, 'label'  =>'castellano de Mexico', 'slug' => 'es_mx', 'description' => 'desc-lang_id-3'],
		['categorie_id' => 4,'language_id' => 2, 'label'  =>'English of United States of America', 'slug' => 'en_us', 'description' => 'desc-lang_id-4']
	];
	
	foreach ($category_of_languages as $value) {
	  App\Models\CategorieLanguage\CategorieLanguage::create($value);
	}       //
    }
}
