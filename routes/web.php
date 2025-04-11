<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


// one post
Route::get('/posts/{id}', [PostController::class,"show"]) ->where('id', '[0-9]+')->name('posts.show');
// all posts
Route::get('/posts',[PostController::class, 'index' ]);
// edit post page
Route::get('/posts/{id}/edit', [PostController::class,'edit']) ->where('id', '[0-9]+');
// update post
Route::put('/posts/{id}', [PostController::class,'update'])->where('id', '[0-9]+');
// store post page
Route::post('/posts', [PostController::class, 'store' ]);
// create post page
Route::get('/posts/create',[PostController::class, 'create' ]);
// delete post
Route::delete('/posts/{id}', [PostController::class,'destroy'])->where('id', '[0-9]+');

