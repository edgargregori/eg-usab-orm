<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	Model::unguard();
        factory(App\User::class,4)->create(); 
	Model::reguard();
  //
    }
}
