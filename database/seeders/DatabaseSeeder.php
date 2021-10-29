<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	public function run() {

		$user = User::factory()->create([
			'name' => 'William Shakespeare'
		]);

		Post::factory(5)->create([
			'user_id' => $user->id
		]);
	}
}
