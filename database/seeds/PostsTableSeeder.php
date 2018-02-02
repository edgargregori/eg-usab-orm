<?php

use App\Models\Photos\Photo;
use App\Models\Languages\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	Model::unguard();
            //string('title');
            //string('slug');
            //text('content');
	//SQLSTATE[42S22]: Column not found: 1054 Unknown column 'photo_id' in 'field list' (SQL: select `photo_id` from `photo_post` where `post_id` = 33) 
  	//$photos = DB::table('photos')->lists('id');
  	//$languages = DB::table('languages')->lists('id');
        //factory(App\Models\Posts\Post::class,4)->create()->each(function ($post) use ($photos, $languages) {
	//	$photos_random = array_rand($photos);
	//	$languages_random = array_rand($languages);
	//	$post->photos()->sync($photos_random, [
	//		'photos_id' => $photos_random, 
	//		'use' => 'photo-use', 
	//		'order' => rand(1,100) 
	//	]);
	//	$post->languages()->sync($languages_random, [
	//		'languages_id' => $languages_random, 
	//		'title' => 'post-title', 
	//		'slug' => 'post-slug', 
	//		'content' => 'post content.' 
	//	]);
	//}); 


  	$photos = Photo::get();
//		$photos_random = $photos->random(rand(1,4));
//	dd($photos_random->first()->id);
//Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`forest`.`posts`, CONSTRAINT `pos  
//  ts_autor_id_foreign` FOREIGN KEY (`autor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) (SQL: insert into `posts` (`autor_id`, `publ  
//  ishes_id`, `updated_at`, `created_at`) values (3, 1, 2018-02-21 11:29:39, 2018-02-21 11:29:39)) 
  	$languages = Language::get();
        factory(App\Models\Posts\Post::class,4)->create()->each(function ($post) use ($photos, $languages) {
		$photos_random = $photos->random(rand(1,4));
		$languages_random = $languages->random(rand(1,2));
		$post->photos()->attach($photos_random->first()->id, [
			//'photos_id' => $photos_random->first()->id, 
			'use' => 'photo-use', 
			'order' => rand(1,100) 
		]);
		$post->languages()->attach($languages_random->first()->id, [
			//'languages_id' => $languages_random->first()->id, 
			'title' => 'post-title', 
			'slug' => 'post-slug', 
			'content' => 'post content.' 
		]);
	}); 

	Model::reguard();
    }
}
