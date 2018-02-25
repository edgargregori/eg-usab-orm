<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;
use App\Models\Publishes\Publish;
use App\Models\Comments\Comment;
use App\User;
use App\Models\Categories\Categorie;
use App\Models\Publishes\Publishe;
use App\Models\Languages\Language;
//use App\Models\Comments\Comment;

class Post extends Model
{
	//protected language = 1; 
	
	protected $casts= [
		"updated_at" => "date"
	];

	protected $hidden = [
		"id",
		"photos"
	];
	protected $appends =  [
		"total_photos",
		//"category",
		"category_language_label"
	];

	// scope
	public function scopeCategoryLanguage($query, $categorie_id) {
		//dd($query, $categorie_id);
		return  $query
			->where("categorie_id", "=", $categorie_id);//1: castellano-espaÃa, 2: castellano-bolivia, 3: castellano-mexico, 4: english-usa
	}

	// computed
	public function getcategoryLanguageLabelAttribute() {
		//return $this->categorie->where("id", "=",$this->id )->get();
		//dd($this->categorie->languages->first());
		return $this->categorie->languages->last();
		return $this->categorie->languages->get();
		return $this->categorie->categorie_language->get();
	}
	//public function getCategoryAttribute() {
	//	return $this->categorie->get();
	//}

	// computed
	public function getTotalPhotosAttribute() {
		return $this->photos->count();
	}

	public function categorie() {
		return $this->belongsTo(Categorie::class);
	}

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
