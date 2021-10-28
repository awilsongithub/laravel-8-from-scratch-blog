<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {

		User::truncate();
		Category::truncate();
		Post::truncate();

		$user = User::factory()->create();

		$personal = Category::create([
			'name' => 'Personal',
			'slug' => 'personal'
		]);

		$work = Category::create([
			'name' => 'Work',
			'slug' => 'work'
		]);

		$post = Post::create([
			'slug' => 'my-seeded-post',
			'category_id' => $personal->id,
			'user_id' => $user->id,
			'title' => 'my post',
			'excerpt' => 'this is an excerpt',
			'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deserunt facilis ipsum adipisci suscipit maxime, quibusdam asperiores veniam inventore fuga! Quas quis magnam eos nesciunt optio cum rem iusto. Dolorem.'
		]);

		$post = Post::create([
			'slug' => 'my-seeded-post-2',
			'category_id' => $work->id,
			'user_id' => $user->id,
			'title' => 'my other post',
			'excerpt' => 'this is an excerpt',
			'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deserunt facilis ipsum adipisci suscipit maxime, quibusdam asperiores veniam inventore fuga! Quas quis magnam eos nesciunt optio cum rem iusto. Dolorem.'
		]);
	}
}
