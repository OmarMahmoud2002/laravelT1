<!-- @extends('layout.app') -->
<x-app-layout>


    <style>
        .container { padding-top: 2rem; }
        .post-image { max-width: 100%; height: auto; margin-top: 10px; }
    </style>
    @section('title', 'Create Post')

    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Add New Post</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="4"  required>{{ old('content') }}</textarea>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="created_by" class="form-label">Created By</label>
                                <select name="user_id" id="user_id" class="form-select" required>
                                    <option value="" disabled selected>Select User</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div> -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Post Image</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            </div>
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Create Post</button>
                                <a href="/posts" class="btn btn-secondary">Back to Posts</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <ul>
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
    </ul>


</x-app-layout>
