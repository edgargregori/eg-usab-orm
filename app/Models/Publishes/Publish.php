<?php

namespace App\Models\Publishes;

use Illuminate\Database\Eloquent\Model;
use App\Models\Posts\Post;

class Publish extends Model
{
	protected $table = 'publishes';
	//public $timestamps = false;
	//public $softDelete = true;

	public function posts() {
		return $this->hasMany(Post::class);
	}
}
