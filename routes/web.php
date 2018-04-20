<?php

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show'); 


// GET /posts
// GET /posts/create
// POST /posts
// GET /posts/{id}/edit
// GET /posts/{id}
// DELETE /posts/{id}