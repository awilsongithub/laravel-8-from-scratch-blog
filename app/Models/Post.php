<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	use HasFactory;

	protected $guarded = []; // can only mass assign fields we are in charge of, not id, created_at etc....

	// magic allows us to call this as a post property
	public function category() {
		return $this->belongsTo(Category::class);
	}

	public function user() {
		return $this->belongsTo(User::class);
	}
}
