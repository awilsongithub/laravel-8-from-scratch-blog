<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	$ordered_posts = Post::latest('created_at')->get();

	return view('posts', [
		'posts' => $ordered_posts,
		'category' => null,
		'author' => null
	]);
});

Route::get('categories/{category:slug}', function (Category $category) {
	return view('posts', [
		'posts' => $category->posts,
		'category' => $category
	]);
});

Route::get('authors/{author:username}', function (User $author) {
	return view('posts', [
		'posts' => $author->posts,
		'author' => $author,
		'category' => null
	]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
	return view('post', [
		'post' => $post
	]);
});
