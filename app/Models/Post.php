<?php


namespace App\Models;

class Post {

	static function find($slug) {
		$path = resource_path("posts/{$slug}.html");

		if (!file_exists($path)) {
			return redirect('/');
		} else {
			return file_get_contents($path);
		}
	}
}
