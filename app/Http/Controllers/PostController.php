<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
 

    public function index()
{
    $posts = Post::latest()->paginate(10); 

    return view('posts.index', compact('posts'));

    // $postFromDB = Post::all();
    // return view('posts.index', ['posts' => $postFromDB]);
}




    function show($id){

        $post = Post::find($id);
        if (!$post) {
            return redirect()->route('posts.index');
        }
        return view('posts.view', ['post' => $post]);
    
    }

    function create(){
        $user = User::all();
        return view('posts.create', ['users' => $user]);
    }




    public function store(StorePostRequest $request)
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

    return to_route('posts.index');
}


    function edit($id){
        $post= Post::find($id);
        $user = User::all();
        return view('posts.edit', ['post' => $post, 'users' => $user]);


    }

    function update(StorePostRequest $request, $id){
        $post = $request->all();

        $singlePost = Post::find($id);
        $singlePost->update([
            'title' => $post['title'],
            'content' => $post['content'],
            'user_id' => $post['user_id'],            
        ]);

        return to_route('posts.show', ['id' => $id]);//super glopal to rederction in post page
        
        // $singlePost->update($data);


        // $postFromDB = Post::find($id);
        // if (!$postFromDB) {
        //     return redirect()->route('posts.index');
        // }
        // $postFromDB->title = $post['title'];
        // $postFromDB->content = $post['content'];
        // $postFromDB->created_by = $post['created_by'];
        // $postFromDB->save();
    }

    function destroy($id){
        $post = Post::find($id);
        if (!$post) {
            return redirect()->route('posts.index');
        }
        $post->delete();
        return to_route('posts.index');//super glopal to rederction in post page


    }

    function trashed(){
        $posts = Post::onlyTrashed()->latest()->paginate(10); 
        return view('posts.trashed', compact('posts'));
    }


    function restore($id){
        $post = Post::withTrashed()->find($id);
        if (!$post) {
            return redirect()->route('posts.index');
        }
        $post->restore();
        return to_route('posts.index');//super glopal to rederction in post page
    }


    function forceDelete($id){
        $post = Post::withTrashed()->find($id);
        if (!$post) {
            return redirect()->route('posts.index');
        }
        $post->forceDelete();
        return to_route('posts.index');//super glopal to rederction in post page
    }

}

