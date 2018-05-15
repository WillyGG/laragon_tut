<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view("posts.index", compact("posts"));
    }

    public function show(Post $post)
    {
        return view("posts.show", compact("post"));
    }

    public function create() 
    {
        return view("posts.create");
    }

    // create new post using request data
    // save it to database
    // redirect to home page
    public function store()
    {
        // create a new post using reqeuest data
        //$post = new Post;
        //sanitize
        //$post->title = request("title");
        //$post->body = request("body");
        // save to database
        //$post->save();

        // validation
        $this->validate(request(), [
            "title" => "required",
            "body" => "required"
        ]);
        Post::create(request(["title", "body"])); //<- be explicit!!!
        


        // redirect to homepage
        return redirect("/");
    }
}
