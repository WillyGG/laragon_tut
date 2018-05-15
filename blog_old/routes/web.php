<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/greet', function() {
    $data = [
        "name" => "jeff"
    ];

    $name = "jeff";

    $names = [
        "jono",
        "steve",
        "jeff",
        "dave"
    ];

    return view('greet', compact("names"));
});



// Tasks
Route::get("/tasks", "TasksController@index");

Route::get("/tasks/{task}", "TasksController@show");


Route::get("/blog", "PostController@index");