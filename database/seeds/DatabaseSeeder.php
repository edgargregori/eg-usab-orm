<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
	$this->call(UsersTableSeeder::class);
	$this->call(CategoriesTableSeeder::class);
	$this->call(LanguagesTableSeeder::class);
	$this->call(CategorieLanguageTableSeeder::class);
	$this->call(PublishesTableSeeder::class);
	$this->call(PhotosTableSeeder::class);
	$this->call(PostsTableSeeder::class);
	$this->call(CommentsTableSeeder::class);
    }
}
