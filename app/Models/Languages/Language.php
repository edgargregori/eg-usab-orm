<?php

namespace App\Models\Languages;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{

	//scope
	public function scopeLanguagePosts($query, $language_id) {
		return $query->find($language_id)->posts()->get();
		$language = Language::find($language_id);
    		return $language->posts()->get();
	}

 	public function categories() {
	  return $this->belongsToMany('App\Models\Categories\Categorie')
		->withPivot('label', 'slug', 'description');
	}   

 	public function posts() {
	  return $this->belongsToMany('App\Models\Posts\Post')
		->withPivot('title', 'slug', 'content');
	}
}
