<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	use HasFactory;

	protected $guarded = []; // can only mass assign fields we are in charge of, not id etc.

	protected $with = ['category', 'author']; // always include these objects

	public function category() {
		return $this->belongsTo(Category::class);
	}

	public function author() {
		return $this->belongsTo(User::class, 'user_id');
	}
}
