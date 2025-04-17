<x-app-layout>

    <style>
        .container {
            padding-top: 2rem;
        }

        .table {
            margin-top: 1rem;
        }

        .action-buttons {
            gap: 5px;
        }

        .post-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
        }

        .created-by-cell {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .photo-cell {
            display: flex;
            justify-content: center;
        }
    </style>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Posts List</h1>
            <a href="/posts/create" class="btn btn-primary">Add New Post</a>
            <a href="{{ route('posts.trashed') }}" class="btn btn-warning mb-3">
        🗑️ View Trashed Posts
    </a>
        </div>


        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Created By</th>
                            <th>Photo</th>
                            <th>Created at</th>
                            <th width="200">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                <td>{{ $post->user->name ?? 'user' }}</td>
                                <td class="photo-cell">
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="post-image">
                                    @else
                                        <img src="{{ asset('storage/default-image.jpg') }}" alt="non" class="post-image">
                                    @endif
                                </td>
                                <td>{{ $post->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <div class="d-flex action-buttons">
                                        <a href="/posts/{{ $post->id }}" class="btn btn-info btn-sm">View</a>
                                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        

        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>


</x-app-layout>
