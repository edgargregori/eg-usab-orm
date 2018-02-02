<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
	public function languages() {
	  return $this->belongsToMany('App\models\Languages\Language')
		->withPivot('label', 'slug', 'description');
	}
}
