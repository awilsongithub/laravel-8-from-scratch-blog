<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function () {
	return view('posts', [
		// eager load post category and user objects using "with"
		'posts' => Post::with(['category', 'user'])->get(),
		'category' => null
	]);
});

Route::get('categories/{category:slug}', function (Category $category) {
	return view('posts', [
		'posts' => $category->posts,
		'category' => $category
	]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
	return view('post', [
		'post' => $post
	]);
});
