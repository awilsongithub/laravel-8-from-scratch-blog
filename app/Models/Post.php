<?php


namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post {

	public $title;
	public $excerpt;
	public $date;
	public $body;

	public function __construct($title, $excerpt, $date, $body) {
		$this->title = $title;
		$this->excerpt = $excerpt;
		$this->date = $date;
		$this->body = $body;
	}

	static function find($slug) {
		$path = resource_path("posts/{$slug}.html");

		if (!file_exists($path)) {
			throw new ModelNotFoundException();
		}
		return cache()->remember("post.{$slug}", 1200, function () use ($path) {
			return file_get_contents($path);
		});
	}

	static function all() {
		$files = File::files(resource_path("posts/"));

		$postObjects =  array_map(function ($file) {
			$o = YamlFrontMatter::parse($file->getContents());
			return new Post($o->title, $o->excerpt, $o->date, $o->body());
		}, $files);
		// ddd($postObjects);

		return $postObjects;
	}
}
