<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 	Model::unguard();
        factory(App\Models\Photos\Photo::class,4)->create(); 
	Model::reguard();       //
    }
}
