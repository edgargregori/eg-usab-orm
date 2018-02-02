<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;
use App\Models\Publishes\Publish;
use App\Models\Comments\Comment;
use App\Models\Users\User;

class Post extends Model
{
 	public function photos() {
	  return $this->belongsToMany('App\Models\Photos\Photo')
		->withPivot('use', 'order');
	}   

 	public function languages() {
	  return $this->belongsToMany('App\Models\Languages\Language')
		->withPivot('title', 'slug', 'content');
	}
	
	public function publish() {
		return $this->belongsTo(Publish::class);
	}

	public function comments() {
		return $this->hasMany(Comment::class);
	}

	public function user() {
		return $this->belongsTo(User::class);
	}

}
