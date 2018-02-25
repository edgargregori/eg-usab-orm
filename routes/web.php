<?php

<<<<<<< HEAD
use App\Models\Posts\Post;

use App\Models\Languages\Language;

use App\Models\Categories\Categorie;
use App\Models\CategorieLanguage\CategorieLanguage;
use App\Models\Comments\Comment;

use App\Models\Photos\Photo;

use App\Models\Publishes\Publish;
use App\User;


=======
>>>>>>> f4d887ac00fcaba6069cc713b52ec7c9f44fec95
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD

Route::get('/categories', function () {
    return Categorie::get();
});

Route::get('/categories/languages', function () {
    return CategorieLanguage::get();
});

Route::get('/language-with-categories', function () {
    return Language::has("categories")->get();
});


Route::get('/languages', function () {
    return Language::get();
});

Route::resource('posts', 'PostsController');
//Route::get('/posts', function () {
//    return Post::get();
//});
// scope
Route::get('/posts/categories/{categorie_id}', function ($categorie_id) {
    return Post::CategoryLanguage($categorie_id)->get();
});
// scope : post-en-castellano = 1, posts-from-english = 2.
Route::get('/languages/{language_id}/posts', function ($language_id) {
    return Language::LanguagePosts($language_id);
	//$language = Language::find($language_id);
    	//return $language->posts()->get();
});
// Property computed.
Route::get('/category-of-posts', function () {
    return Post::has("categorie")->get();
});

Route::get('/comments', function () {
    return Comment::get();
});

Route::get('/photos', function () {
    return Photo::get();
});

Route::get('/publishes', function () {
    return Publish::get();
});


Route::get('/users', function () {
    return User::get();
});


=======
>>>>>>> f4d887ac00fcaba6069cc713b52ec7c9f44fec95
