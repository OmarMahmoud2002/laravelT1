@extends('layout.app')
@section('title', 'View Post')

    <style>
        .container { padding-top: 2rem; }
        .post-detail { margin-bottom: 0.5rem; }
        .post-detail strong { min-width: 120px; display: inline-block; }
    </style>
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">View Post</h3>
                        <a href="/posts" class="btn btn-secondary">Back to Posts</a>
                    </div>
                    <div class="card-body">
                        <div class="post-detail">
                            <strong>Post ID:</strong>
                            <span>{{ $post['id'] }}</span>
                        </div>
                        <div class="post-detail">
                            <strong>Title:</strong>
                            <span>{{ $post['title'] }}</span>
                        </div>
                        <div class="post-detail">
                            <strong>Content:</strong>
                            <span>{{ $post['content'] }}</span>
                        </div>
                        <div class="post-detail">
                            <strong>Created By:</strong>
                            <span>{{ $post->user->name ?? "user" }}</span>
                        </div>
                        <div class="post-detail">
                            <strong>Created At:</strong>
                            <span>{{ $post->created_at->format('l, F j, Y g:i A') }}</span>
                        </div>
                        
                        <div class="mt-4 d-flex gap-2">
                            <a href="/posts/{{ $post['id'] }}/edit" class="btn btn-warning">Edit Post</a>
                            <form action="/posts/{{ $post['id'] }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
