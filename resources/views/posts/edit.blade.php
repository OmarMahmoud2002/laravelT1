<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container { padding-top: 2rem; }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Edit Post</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('posts.update',$post->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $post['title'] }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="4" required>{{ $post['content'] }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="created_by" class="form-label">Created By</label>
                                <select name="user_id" id="user_id" class="form-select" required>
                                <option value="" disabled>Select User</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $post->user_id == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                                </select>

                            </div>
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Update Post</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>