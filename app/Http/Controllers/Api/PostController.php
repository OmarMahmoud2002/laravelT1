<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::latest()->paginate(10); 
    
        // return response()->json($posts);
        $posts= Post::all();
        return PostResource::collection($posts);
    
    }

    public function show($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        return $post;
    }
    public function store(Request $request)
    {
        $data = $request->all(); 

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $post = new Post();
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->user_id = Auth::id(); // Assuming you want to set the user_id to the currently authenticated user
        $post->image = $imagePath; 
        $post->save();

        return "Done";
        // return response()->json(['message' => 'Post created successfully'], 201);
    }
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        $data = $request->all();
        $post->update($data);

        return "Done Update";
        // return response()->json(['message' => 'Post updated successfully']);
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        $post->delete();
        return "Done Delete";
        // return response()->json(['message' => 'Post deleted successfully']);
    }

    
}
