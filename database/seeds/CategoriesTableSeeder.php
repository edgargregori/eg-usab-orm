<?php

use Illuminate\Database\Seeder;
//use Category;

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
	//factory(Category::class, 4)->create();
	  App\Models\Categories\Category::create(); // 1 -> Castellano españa
	  App\Models\Categories\Category::create();//2 castellano de Bolivia'
	  App\Models\Categories\Category::create();//3 castellano de Mexico'
	  App\Models\Categories\Category::create(); // 4 ingles de United States of America
	
    }
}
