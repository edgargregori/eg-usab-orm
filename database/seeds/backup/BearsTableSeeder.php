<?php

use Illuminate\Database\Seeder;
use App\Models\Bears\Bear;
use App\Models\Trees\Tree;

class BearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//$factory->define(Bear::class, function (Faker $faker) {
	//	return [
	//		'name' 		=> $faker->name;
	//		'danger_level'	=> rand(0,9);
	//	];
	//});
	$trees = Tree::get();
	factory(Bear::class,120)
		->create()
		->each(function ($bear) use ($trees){
			$trees_random = $trees->random( rand(10,20));
			$bear->tres()->sync($trees_random);
			});

    }
}
