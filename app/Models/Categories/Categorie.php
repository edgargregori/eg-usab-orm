<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	protected $table="categories";
    //
	public function languages() {
	  return $this->belongsToMany('App\Models\Languages\Language')
		->withPivot('label', 'slug', 'description');
	}

	public function posts() {
		return $this->hasMany('App\Models\Posts\Post');
	}
}
