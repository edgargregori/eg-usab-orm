<?php

//use  App\Models\Publishes\Publish;
//use Publish;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class PublishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	Model::unguard();
        factory(App\Models\Publishes\Publish::class,4)->create(); 
	Model::reguard();
    }
}
