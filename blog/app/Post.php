<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["title", "body"]; // whitelist of acceptable fields
    // or protected $guarded = []; <= blacklist of fields

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    // returns latest comments
    public function latestComments()
    {
    	return $this->comments->sortByDesc("created_at");

    	//latest()->get(["body", "created_at"]);
    }

    public function addComment($body)
    {
    	$this->comments()->create(compact("body"));

    	/* long form way
    	Comment::create([
			"body" => $body,
			"post_id" => $this->id
		]);*/
    }
}
