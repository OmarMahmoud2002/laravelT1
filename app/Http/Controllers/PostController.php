<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
 

    public function index()
{
    $posts = Post::latest()->paginate(10); 

    return view('posts.index', compact('posts'));
}




    function show($id){
        $post = ['id' => $id, 'title' => 'Post 1', 'content' => 'Content of post 1', 'created_by' => 'omar'];
        return view('posts.show', ['post' => $post]);
    }

    function create(){
        return view('posts.create');
 
    }

    function store(Request $request){
        $post = $request->all();
        // dd($post);
        return "Done Create Post with title: {$post['title']} and content: {$post['content']}";
    }

    function edit($id){
        $post = ['id' => $id, 'title' => 'Post 1', 'content' => 'Content of post 1', 'created_by' => 'omar'];
        return view('posts.edit', ['post' => $post]);
    }

    function update(Request $request, $id){
        $post = $request->all();
        return "Done Update Post with id: $id and title: {$post['title']} and content: {$post['content']}";
    }

    function destroy($id){
        return "Done Delete Post with id: $id";
    }

}

