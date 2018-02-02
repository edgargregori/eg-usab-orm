<?php

namespace App\Models\Languages;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
 	public function categories() {
	  return $this->belongsToMany('App\models\Categories\Category')
		->withPivot('label', 'slug', 'description');
	}   

 	public function posts() {
	  return $this->belongsToMany('App\models\Posts\Post')
		->withPivot('title', 'slug', 'content');
	}
}
