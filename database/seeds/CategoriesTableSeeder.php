<?php

use Illuminate\Database\Seeder;
//use Categorie;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pivot-label:'Castellano', 'Francais', 'Deutsch', 'English', 
	//factory(Categorie::class, 4)->create();
	  App\Models\Categories\Categorie::create(); // 1 -> Castellano españa
	  App\Models\Categories\Categorie::create();//2 castellano de Bolivia'
	  App\Models\Categories\Categorie::create();//3 castellano de Mexico'
	  App\Models\Categories\Categorie::create(); // 4 ingles de United States of America
	
    }
}
